<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyLengthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_lengths', function (Blueprint $table) {
            $table->id();
            $table->float('name', 8, 2)->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->index();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreignId('month_id')->nullable()
            ->constrained('months')
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
        Schema::dropIfExists('body_lengths');
    }
}
