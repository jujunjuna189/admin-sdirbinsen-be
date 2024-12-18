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
        Schema::create('peta_jabatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('satuan_id');
            $table->bigInteger('personil_id')->nullable();
            $table->string('kategori')->nullable();
            $table->string('golongan')->nullable();
            $table->string('jabatan')->nullable();
            $table->date('tmt')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peta_jabatan');
    }
};
