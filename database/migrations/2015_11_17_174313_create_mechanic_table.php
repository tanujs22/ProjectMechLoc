<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
Schema::create('mechanic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('garage')->unique();
            $table->string('address',1000);
            $table->string('phone',10);
            $table->string('speciality',20);
                       
            $table->rememberToken();
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
        //
    }
}
