<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->uuid('session_id')->primary()->default(DB::raw('(UUID())'));
            $table->uuid('user_id');
            $table->uuid('user_package_id');
            $table->uuid('audio_id');
            $table->integer('package_sort_number')->nullable();
            $table->boolean('is_delayed')->nullable()->default(false);
            $table->string('duration');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->double('player_time')->nullable();
            $table->jsonb('pauses')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_package_id')
                ->references('user_package_id')
                ->on('user_package')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('audio_id')
                ->references('audio_id')
                ->on('audios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
