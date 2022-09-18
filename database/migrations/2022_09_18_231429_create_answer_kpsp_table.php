<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerKPSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_kpsp', function (Blueprint $table) {
            $table->id();
            $table->enum('answer', ['yes', 'not'])->default('not')->index();
            $table->timestamps();


            $table->foreignId('kpsp_id')->nullable()
            ->constrained('kpsp')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('child_id')->nullable()
            ->constrained('children')
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
        Schema::dropIfExists('answer_kpsp');
    }
}
