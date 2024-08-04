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
        Schema::create('personil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('satuan_id');
            $table->string('nrp');
            $table->string('nama');
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'])->nullable();
            $table->string('suku_bangsa')->nullable();
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O'])->nullable();

            $table->string('gol_jabatan', 255)->nullable();
            $table->string('jabatan', 255)->nullable();
            $table->string('pangkat', 255)->nullable();
            $table->string('korps', 255)->nullable();
            $table->string('sumber_pa')->nullable();
            $table->string('psi')->nullable();
            $table->string('status')->nullable();

            $table->date('tmt_1')->nullable();
            $table->date('tmt_2')->nullable();
            $table->date('tmt_tni')->nullable();
            $table->date('tmt_jab')->nullable();

            $table->string('picture')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personil');
    }
};
