<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('Country name');
            $table->char('abbreviation', 2)->default('')->comment('Country abbreviation');
            $table->string('zh_name')->default('')->comment('Chinese name of Country');
            $table->char('continent_code', 2)->default('')->comment('Continent code');
            $table->char('phone_code', 4)->default('')->comment('Phone code of country');
            $table->char('currency', 3)->default('')->comment('currency of country');
            $table->unique('abbreviation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
