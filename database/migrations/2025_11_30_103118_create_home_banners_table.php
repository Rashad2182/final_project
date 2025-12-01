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
        Schema::create('home_banners', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->string('alt');
            $table->string('title');
            $table->string('slogan')->nullable()->default(null);
            $table->text('intro_text')->nullable()->default(null);
            $table->string('button_text_1')->nullable()->default(null);
            $table->string('button_text_2')->nullable()->default(null);
            $table->string('button_link_1')->nullable()->default(null);
            $table->string('button_link_2')->nullable()->default(null);
            $table->integer('order_no')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_banners');
    }
};
