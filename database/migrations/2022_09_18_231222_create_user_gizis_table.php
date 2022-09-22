<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGizisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_gizis', function (Blueprint $table) {
            $table->id();
            $table->float('weight', 8, 2)->nullable();
            $table->float('body_length', 8, 2)->nullable();
            $table->float('head_circle', 8, 2)->nullable();
            $table->string('status_bb_weight')->nullable();
            $table->string('status_bb')->nullable();
            $table->string('status_weight')->nullable();
            $table->string('status_head')->nullable();
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
        Schema::dropIfExists('user_gizis');
    }
}
