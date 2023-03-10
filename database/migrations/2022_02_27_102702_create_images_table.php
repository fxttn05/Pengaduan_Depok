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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengaduan_id')->nullable();
            $table->foreign('pengaduan_id')->references('id')->on('pengaduans');
            $table->unsignedBigInteger('tanggapan_id')->nullable();
            $table->foreign('tanggapan_id')->references('id')->on('tanggapans');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
