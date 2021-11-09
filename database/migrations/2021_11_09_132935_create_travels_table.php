<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique();
            $table->string('destination', 50);
            $table->tinyInteger('days')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('departure_airport', 50);
            $table->string('arrival_airport', 50);
            $table->string('accomodation_type', 50);
            $table->string('accomodation_name', 50);
            $table->string('accomodation_address', 50);
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
        Schema::dropIfExists('travels');
    }
}
