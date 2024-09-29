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
        Schema::create('role_has_permission', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->comment('Relation to table roles');
            $table->bigInteger('permission_id')->comment('Relation to table permissions');
            $table->string('description')->nullable()->comment('Description for feature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_has_permission');
    }
};
