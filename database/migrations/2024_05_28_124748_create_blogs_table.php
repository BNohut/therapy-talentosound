<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('blog_id')->primary()->default(DB::raw('(UUID())'));
            $table->uuid('user_id');
            $table->string('title', 50)->unique();
            $table->string('slug', 100)->unique();
            $table->string('subtitle', 50);
            $table->longText('content');
            $table->jsonb('tags')->nullable();
            $table->string('image')->nullable();
            $table->uuid('approver_user_id')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
