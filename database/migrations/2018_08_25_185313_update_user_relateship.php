<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class updateUserRelateship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {


        Schema::table('users', function ($table) {
            $table->string('phone_id');
         //   $table->foreign('phone_id')->references('id')->on('phones');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {

    }
}
