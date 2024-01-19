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
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->string('namaheader');
            $table->string('namapembina');
            $table->string('namadepan');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('email');
            $table->string('deskdepan');
            $table->string('deskkontak');
            $table->string('imgpembina');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};
