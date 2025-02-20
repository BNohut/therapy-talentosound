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
        Schema::create('tests', function (Blueprint $table) {
            $table->uuid('test_id')->primary()->default(DB::raw('(UUID())'));
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->double('min_age')->nullable();
            $table->double('max_age')->nullable();
            $table->string('attachment')->nullable();
            $table->jsonb('title')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
