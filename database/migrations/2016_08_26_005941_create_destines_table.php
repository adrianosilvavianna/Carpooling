
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('complement')->nullable();
            $table->string('cep')->nullable();
            $table->string('neighborhood');
            $table->string('city')->default('Curitiba');
            $table->string('uf')->default('PR');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('destines');
    }
}
