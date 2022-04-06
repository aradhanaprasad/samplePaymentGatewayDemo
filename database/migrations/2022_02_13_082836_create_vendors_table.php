<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('storeName')->unique();
            $table->string('storeAddress')->nullable();
            $table->string('storeDescription')->unique();
            $table->string('contactNumber')->nullable();
            $table->string('profilePicture')->unique();
            $table->string('bannerPicture')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('userId')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
