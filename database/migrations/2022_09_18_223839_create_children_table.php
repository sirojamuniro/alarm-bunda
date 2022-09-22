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
            $table->string('name')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->index();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('operation')->nullable(); //sc/normal
            $table->float('birth_weight', 8, 2)->nullable();
            $table->string('helper')->nullable();
            $table->mediumText('address_place')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('father_name')->nullable();
            $table->integer('father_age')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('mother_age')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('number_child')->nullable();

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
