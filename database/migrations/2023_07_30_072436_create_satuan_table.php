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
        Schema::create('satuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('logo')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('sejarah_url')->nullable();
            $table->text('hymne')->nullable();
            $table->string('hymne_url')->nullable();
            $table->text('mars')->nullable();
            $table->string('mars_url')->nullable();
            $table->string('struktur_organisasi')->nullable();
            $table->string('struktur_organisasi_url')->nullable();
            $table->text('alamat')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->string('status')->nullable();
            $table->integer('order_number')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuan');
    }
};
