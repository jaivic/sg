<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class phones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
     

        // Create table for storing permissions
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
         
            $table->timestamps();
        });

     
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
     
        Schema::drop('phones');
    }
}
