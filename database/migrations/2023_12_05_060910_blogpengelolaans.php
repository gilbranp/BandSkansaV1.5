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
        Schema::create('blog_pengelolaans', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('penulis');
            $table->string('tag');
            $table->date('tanggal');

            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_pengelolaans');
    }
};
