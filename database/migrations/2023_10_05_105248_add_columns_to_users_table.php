<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->uuid('province_id')->nullable();
            $table->uuid('state_id')->nullable();
            $table->string('birthday')->nullable();
            $table->string('avatar')->nullable();
            $table->uuid('specialist_id')->nullable();
            $table->uuid('organisation_id')->nullable();
            $table->string('resource')->nullable();
            $table->string('identity_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('graduate')->nullable();
            $table->string('title')->nullable();
            $table->string('child_identity_no')->nullable();
            $table->string('child_name')->nullable();
            $table->string('child_gender')->nullable();
            $table->string('child_birthyear')->nullable();
            $table->dateTime('organisation_approved_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'birthday', 'avatar', 'specialist_id', 'organisation_id']);
        });
    }
};
