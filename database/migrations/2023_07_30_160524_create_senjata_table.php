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
        Schema::create('senjata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('satuan_id')->unsigned();
            $table->string('nama');
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Define foreign key constraint
            $table->foreign('satuan_id')->references('id')->on('satuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senjata');
    }
};
