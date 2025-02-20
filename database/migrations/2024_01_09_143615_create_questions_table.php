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
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('question_id')->primary()->default(DB::raw('(UUID())'));
            $table->integer('sorting_number');
            $table->uuid('test_id');
            $table->jsonb('types')->nullable();
            $table->string('title', 500);
            $table->jsonb('items')->nullable();
            $table->jsonb('options')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('test_id')
                ->references('test_id')
                ->on('tests')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
