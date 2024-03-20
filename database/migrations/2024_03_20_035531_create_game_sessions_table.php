<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('memo_test_id')->constrained()->onDelete('cascade');
            $table->string('user_session_code');
            $table->unsignedInteger('retries')->default(0);
            $table->unsignedInteger('number_of_pairs')->default(0);
            $table->enum('state', ['Started', 'Completed'])->default('Started');
            $table->json('board_state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_sessions');
    }
};
