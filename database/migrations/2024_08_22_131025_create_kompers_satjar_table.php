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
        Schema::create('kompers_satjar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kompers_satjar_categorys_id');
            $table->string('category')->comment('from name table kompers_satjar');
            $table->string('sub_category')->comment('from name table kompers_satjar');
            $table->string('title');
            $table->text('form')->comment('from name table kompers_satjar');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kompers_satjar');
    }
};
