<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        

        Schema::create('dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dish_name');
            $table->string('categorie');
            $table->bigInteger('active');
                        $table->decimal('preu');

            $table->foreign('categorie')->references('dish_categorie')->on('categories_dishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish');
    }
}
