<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startime');
            $table->dateTime('endtime');
            $table->timestamps();


            $table->unsignedBigInteger('activity_id')->default(1);
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesions');


        Schema::table('sesions', function (Blueprint $table) {
            $table->dropForeign('sesions_activity_id_foreign');
            $table->dropColumn('activity_id');
        });
    }
}
