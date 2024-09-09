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
            $table->string('name')->nullable(); // Only used for group chats
            $table->boolean('is_group')->default(0); // 0 for one-on-one, 1 for group chat
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('type')->default('public'); // private or group
            $table->string('logo')->nullable();
            $table->string('status')->default('active'); // active, archived
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
