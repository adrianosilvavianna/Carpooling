<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('address');
            $table->string('neighborhood');
            $table->string('city')->default('Curitiba');
            $table->string('country')->default('Brasil');
            $table->string('complement')->nullable();
            $table->string('uf')->default('PR');
            $table->string('cep')->nullable();

            $table->integer('locationable_id');
            $table->string('locationable_type');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
