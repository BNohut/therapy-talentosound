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
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            if (Schema::hasTable('password_reset_tokens')) {
                try {
                    $table->dropPrimary();
                } catch (\Exception $e) {
                }
            }
        });

        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable()->change();
            $table->string('phone')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('phone');
            $table->primary('email');
        });
    }
};
