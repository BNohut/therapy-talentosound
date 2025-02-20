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
        Schema::create('user_test', function (Blueprint $table) {
            $table->uuid('user_test_id')->primary()->default(DB::raw('(UUID())'));
            $table->uuid('user_id');
            $table->uuid('test_id');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('user_test');
    }
};
