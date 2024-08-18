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
        Schema::create('binsiapsats_lapsat_induk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('satuan_id');
            $table->string('nama');
            $table->text('file');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binsiapsats_lapsat_induk');
    }
};