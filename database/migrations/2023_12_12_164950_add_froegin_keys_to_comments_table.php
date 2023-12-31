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
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id', 'commentstouser_ibfk_2')->references('id')->on('users');
            $table->foreign('post_id', 'commentstopost_ibfk_3')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id', 'commentstouser_ibfk_2')->references('id')->on('users');
            $table->foreign('post_id', 'commentstopost_ibfk_3')->references('id')->on('posts');
        });
    }
};
