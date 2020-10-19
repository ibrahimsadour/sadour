<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wat_ik_doe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titel');
            $table->string('slug')->nullable();
            $table->string('description');
            $table->string('translation_lang')->nullable();
            $table->integer('translation_of')->unsigned();
            $table->tinyInteger('active')
            ->comment('1 => show the product on the site, 0 => donot show the product on the site')->default('1');
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
        Schema::dropIfExists('wat_ik_doe');
    }
}
