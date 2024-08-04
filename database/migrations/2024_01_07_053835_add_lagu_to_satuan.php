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
        Schema::table('satuan', function (Blueprint $table) {
           $table->string('hymne_lagu', 255)->nullable(); //
           $table->string('mars_lagu', 255)->nullable(); //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('satuan', function (Blueprint $table) {
            $table->dropColumn('hymne_lagu');
            $table->dropColumn('mars_lagu');
        });
    }
};
