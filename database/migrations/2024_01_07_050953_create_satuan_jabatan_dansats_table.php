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
        Schema::create('satuan_jabatan_dansat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('satuan_id')->unsigned();
            $table->string('nama');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->timestamps();
            $table->softDeletes();

            // Add foreign key constraint to 'personil' table
            $table->foreign('satuan_id')->references('id')->on('satuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuan_jabatan_dansat');
    }
};
