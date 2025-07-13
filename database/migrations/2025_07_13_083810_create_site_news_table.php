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
        Schema::create('site_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->string('img')->nullable();


            $table->text('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->string('img2')->nullable();
            $table->text('desc2')->nullable();


            $table->string('metatitle')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();

            $table->string('published')->default(1);
            $table->integer('sorting')->default(999);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_news');
    }
};
