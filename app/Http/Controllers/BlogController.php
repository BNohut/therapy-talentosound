<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Orchid\Attachment\File;

class BlogController extends Controller
{
    public function all(Request $request)
    {
        try {
            $filter = $request->filter ?? '';
            $limit = $request->limit ?? 0;
            $page = $request->page;
            $itemsPerPage = $request->itemsPerPage;

            $blogsQuery = Blog::with(['user', 'approver', 'attachment'])
                ->orderBy('created_at', 'desc');

            if ($request->isMethod('GET')) {
                $blogsQuery->whereNotNull('approved_at');
                if ($filter) {
                    $blogsQuery->where('title', 'like', '%' . $filter . '%')
                        ->orWhere('content', 'like', '%' . $filter . '%')
                        ->orWhere('tags', 'like', '%' . $filter . '%')
                        ->whereNotNull('approved_at');
                }
                if ((int) $limit > 0) {
                    $blogs = $blogsQuery->take($limit)->get();
                } else {
                    $blogs = $blogsQuery->get();
                }
                $blogs->each(function ($blog) {
                    $blog->date = formatDate($blog->created_at);
                });
            } else {
                $blogs = $blogsQuery->paginate($itemsPerPage, ['*'], 'page', $page);
            }

            $tags = $blogs->pluck('tags')
                ->map(function ($tag) {
                    return json_decode($tag, true);
                })
                ->flatten()
                ->unique()
                ->values();


            if ($blogs->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'No blogs found',
                    'data' => []
                ], 200);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Blogs found',
                'data' => $blogs,
                'tags' => $tags
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => 'Error fetching blogs',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile()
            ], 500);
        }
    }

    public function createOrUpdate(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'content' => 'required|string',
                'tags' => 'string',
            ], [
                'title.required' => __('Title is required'),
                'title.string' => __('Title must be a string'),
                'title.max' => __('Title must not exceed 255 characters'),
                'subtitle.required' => __('Subtitle is required'),
                'subtitle.string' => __('Subtitle must be a string'),
                'subtitle.max' => __('Subtitle must not exceed 255 characters'),
                'content.required' => __('Content is required'),
                'content.string' => __('Content must be a string'),
                'tags.string' => __('Tags must be a string'),
            ]);

            if (!$request->blog_id) {
                $message = 'Blog created';
                $new = true;
            } else {
                $blog = Blog::where('blog_id', $request->blog_id)->first();
                if (!$blog) {
                    return response([
                        'status' => 'error',
                        'message' => 'Blog not found',
                    ], 404);
                }

                $message = 'Blog updated';
                $new = false;
            }

            $blog = $this->saveBlogData($new, $request);

            return response([
                'status' => 'success',
                'message' => $message,
                'data' => $blog
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => 'Error processing blog',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile()
            ], 500);
        }
    }

    private function saveBlogData($new, $request)
    {
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'tags' => $request->tags,
            'user_id' => auth()->user()->user_id,
        ];
        if ($new) {
            $blog = Blog::create($data);
        } else {
            $blog = Blog::where('blog_id', $request->blog_id)->first();
            $blog->update($data);
        }

        if ($request->hasFile('image')) {
            if ($blog->attachment) {
                $blog->attachment->each->delete();
            }

            $image = $request->file('image');
            $orchidFile = new File($image);
            $attachment = $orchidFile->allowDuplicates()->load();
            $blog->image = $attachment->id;
            $blog->save();

            $blog->attachment()->syncWithoutDetaching(
                [$attachment->id]
            );
            $blog->load('attachment');
        }

        return $blog;
    }

    public function remove(Request $request)
    {
        try {
            $blog = Blog::where('blog_id', $request->blog_id)->first();

            if (!$blog) {
                return response([
                    'status' => 'error',
                    'message' => 'Blog not found',
                ], 404);
            }

            $blog->delete();

            return response([
                'status' => 'success',
                'message' => 'Blog deleted',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => 'Error deleting blog',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile()
            ], 500);
        }
    }

    public function detail(Request $request)
    {
        try {
            $blog = Blog::where('blog_id', $request->id)
                ->with(['user', 'approver', 'attachment'])
                ->first();

            if (!$blog) {
                return response([
                    'status' => 'error',
                    'message' => 'Blog not found',
                ], 404);
            }
            return response([
                'status' => 'success',
                'message' => 'Blog found',
                'data' => $blog
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => 'Error fetching blog',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile()
            ], 500);
        }
    }

    public function approve(Request $request)
    {
        try {
            $blog = Blog::where('blog_id', $request->blog_id)->first();

            if (!$blog) {
                return response([
                    'status' => 'error',
                    'message' => 'Blog not found',
                ], 404);
            }

            $blog->approved_at = now();
            $blog->approver_user_id = auth()->user()->user_id;
            $blog->save();

            return response([
                'status' => 'success',
                'message' => 'Blog approved',
                'data' => $blog
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => 'Error approving blog',
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile()
            ], 500);
        }
    }
}
