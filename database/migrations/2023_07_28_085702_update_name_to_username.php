<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Command utk rename column dri table users;
// composer require doctrine/dbal
// php artisan make:migration update_name_to_username --table=users
// php artisan migrate

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Kalau mau rename table
        // Schema::table('users', function (Blueprint $table) {
        //     $table->renameColumn('name', 'username');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // php artisan migrate:rollback --step=1
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('username', 'name');
        });
    }
};
