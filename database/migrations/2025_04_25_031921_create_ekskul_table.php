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
       Schema::create('ekskuls', function (Blueprint $table) {
    $table->id(); // unsignedBigInteger dan primary
    $table->string('nama_ekskul');
    $table->text('deskripsi')->nullable();
    $table->string('logo')->nullable();
    $table->timestamps();
});

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskuls');
    }
};
