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
        Schema::create('pengelolaan_kontens', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('namaacara');
            $table->string('tempat');
            $table->string('url');
            $table->string('detail');
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
        //
    }
};
