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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('document_id')->nullable();
            $table->foreign('document_id')->references('id')->on('documents');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->string('pengaduan_date');
            $table->string('end_date')->nullable();
            $table->text('isi');
            $table->enum('status', ['report', 'process', 'dones']);
            $table->bool('is_anonym');
            $table->bool('is_public');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
