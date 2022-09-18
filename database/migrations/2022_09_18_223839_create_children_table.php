<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['male', 'female'])->default('male')->index();
            $table->date('dob');
            $table->integer('age');
            $table->string('operation'); //sc/normal
            $table->float('birth_weight', 8, 2);
            $table->string('helper');
            $table->string('place_of_birth');
            $table->string('father_name');
            $table->integer('father_age');
            $table->string('mother_name');
            $table->integer('mother_age');
            $table->mediumText('address');
            $table->string('number_child');

            $table->timestamps();

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
        Schema::dropIfExists('children');
    }
}
