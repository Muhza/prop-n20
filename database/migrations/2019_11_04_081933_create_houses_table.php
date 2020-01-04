<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('category_id');
            $table->string('nama');
            $table->text('images');
            $table->string('price');
            $table->string('address');
            $table->integer('luas');
            $table->string('electricity')->nullable();
            $table->text('price_list_images')->nullable();
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('living_room');
            $table->integer('kitchen');
            $table->string('garage');
            $table->text('floorplan');
            $table->text('description');
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
        Schema::dropIfExists('houses');
    }
}
