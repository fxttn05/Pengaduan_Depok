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
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('pengaduan_id');
            $table->foreign('pengaduan_id')->references('id')->on('pengaduans');
            $table->string('tanggapan');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->string('tanggapan_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapans');
    }
};
