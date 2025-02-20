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
        Schema::create('answers', function (Blueprint $table) {
            $table->uuid('answer_id')->primary()->default(DB::raw('(UUID())'));
            $table->uuid('test_id');
            $table->uuid('question_id');
            $table->uuid('user_id');
            $table->uuid('user_test_id');
            $table->string('answer');
            $table->double('score')->nullable();
            $table->jsonb('options')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('test_id')
                ->references('test_id')
                ->on('tests')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('question_id')
                ->references('question_id')
                ->on('questions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_test_id')
                ->references('user_test_id')
                ->on('user_test')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
