<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_symptoms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('sympton_id')->nullable()
            ->constrained('symptoms')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('user_imunitation_id')->nullable()
            ->constrained('user_imunitations')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('user_id')->nullable()
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_symptoms');
    }
}
