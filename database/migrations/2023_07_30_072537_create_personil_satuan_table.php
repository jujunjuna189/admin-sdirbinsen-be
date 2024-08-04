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
        Schema::create('personil_satuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personil_id')->unsigned();
            $table->bigInteger('satuan_id')->unsigned();
            $table->date('tmt');
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Define foreign key constraints
            $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');
            $table->foreign('satuan_id')->references('id')->on('satuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personil_satuan');
    }
};
