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
        Schema::create('satuan_purnawirawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('satuan_id')->unsigned();
            $table->string('gambar')->nullable();
            $table->string('nama');
            $table->string('pangkat')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('leting')->nullable();
            $table->string('no_hp')->nullable();
            $table->text('alamat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuan_purnawirawan');
    }
};
