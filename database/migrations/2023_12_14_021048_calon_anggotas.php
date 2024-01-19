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
        Schema::create('Calon_Anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('email');
            $table->enum('posisi',['vocal','gitar','bass','drum','kendang','keyboard','saxophone','biola']);
            $table->string('pengalaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Calon_Anggotas');
    }
};
