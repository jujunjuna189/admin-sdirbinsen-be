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
        Schema::create('cat_personils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personil_id')->unsigned();
            $table->string('name');
            $table->string('file');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_personils');
    }
};
