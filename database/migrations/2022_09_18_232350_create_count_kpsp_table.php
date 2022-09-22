<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountKpspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_kpsp', function (Blueprint $table) {
            $table->id();
            $table->integer('count_yes')->nullable();
            $table->integer('count_not')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('count_kpsp');
    }
}
