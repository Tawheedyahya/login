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
        // Schema::table('users',function(Blueprint $table)){}
        // DB::statement('ALTER table users add column place varchar(50) after role');
        DB::statement('ALTER table users add column age int after role');
        DB::statement('ALTER table users add column work varchar(50) after role');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
