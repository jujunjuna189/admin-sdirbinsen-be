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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from_id')->comment("Relation to table user, from sender chat");
            $table->bigInteger('to_id')->comment('Relation to table user, to sender chat');
            $table->text('message')->nullable();
            $table->text('attachment')->nullable();
            $table->string('attachment_name')->nullable();
            $table->timestamps();
        });

        // Schema::create('chats_contact', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('user_id')->comment('Relation to table user, owner from contact');
        //     $table->bigInteger('receiver_id')->comment('Relation to table user, receriver user chat');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
        // Schema::dropIfExists('chats_contact');
    }
};
