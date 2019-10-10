<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChineseRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinese_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('Region name');
            $table->char('code', 6)->default('')->comment('Region code');
            $table->tinyInteger('level')->default(0)->comment('Level of region');
            $table->char('phone_code', 4)->default('')->comment('Phone code of region');
            $table->integer('parent_id')->default(0)->comment('Prarent id of region');
            $table->unique('code');
            $table->index('name');
            $table->index('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chinese_regions');
    }
}
