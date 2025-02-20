<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Orchid\Attachment\File;

class SliderController extends Controller
{
    public function all()
    {
        try {
            $sliders = Slider::with(['user', 'attachment'])->where('status', 1)->get();
            if ($sliders->isEmpty()) {
                return response([
                    'status' => false,
                    'message' => 'No slides found',
                    'data' => []
                ], 200);
            }
            return response([
                'status' => 'success',
                'message' => 'Slides fetched successfully',
                'data' => $sliders
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => $err->getMessage() . ' on line ' . $err->getLine()
            ], 500);
        }
    }

    public function createOrUpdate(Request $request)
    {
        try {
            if (!$request->slide_id) {
                $message = 'Slide created';
                $new = true;
            } else {
                $slider = Slider::where('slide_id', $request->slide_id)->first();
                if (!$slider) {
                    return response([
                        'status' => 'error',
                        'message' => 'Slide not found',
                    ], 404);
                }

                $message = 'Slide updated';
                $new = false;
            }

            $slider = $this->saveSliderData($new, $request);

            return response([
                'status' => 'success',
                'message' => $message,
                'data' => $slider
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage() . ' on line ' . $err->getLine(),
            ], 500);
        }
    }
    private function saveSliderData($new, $request)
    {
        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'link' => $request->link,
            'status' => $request->status,
            'user_id' => auth()->user()->user_id,
        ];
        if ($new) {
            $slider = Slider::create($data);
        } else {
            $slider = Slider::where('slide_id', $request->slide_id)->first();
            $slider->update($data);
        }

        if ($request->hasFile('image')) {
            if ($slider->attachment) {
                $slider->attachment->each->delete();
            }

            $image = $request->file('image');
            $orchidFile = new File($image);
            $attachment = $orchidFile->allowDuplicates()->load();
            $slider->image = $attachment->id;
            $slider->save();

            $slider->attachment()->syncWithoutDetaching(
                [$attachment->id]
            );
            $slider->load('attachment');
        }

        return $slider;
    }

    public function detail(Request $request)
    {
        try {
            $slider = Slider::where('slide_id', $request->slide_id)->first();
            if (!$slider) {
                return response([
                    'status' => false,
                    'message' => 'Slide not found'
                ], 404);
            }
            $slider->load('attachment');
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $slider
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => $err->getMessage() . ' on line ' . $err->getLine()
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        $slider = Slider::where('slide_id', $request->slide_id)->first();

        if (is_null($slider)) {
            return response([
                'status' => false,
                'message' => 'Slide not found'
            ], 404);
        }
        try {
            $slider->delete();
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => 'Slide silindi',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage() . ' on line ' . $err->getLine(),
            ], 500);
        }
    }
}
