<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password', 64);
            $table->string('last_name', 16);
            $table->string('first_name', 16);
            $table->integer('zipcode');
            $table->string('prefecture', 16);
            $table->string('municipality', 16);
            $table->string('address', 32);
            $table->string('apartments', 32);
            $table->string('email', 128);
            $table->string('phone_number', 16);
            $table->integer('user_classification_id')->unsigned();
            //外部キー制約
            $table->foreign('user_classification_id')->references('id')->on('m_users_classifications')->onDelete('cascade');
            $table->string('company_name', 128);
            $table->char('delete_flag', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_users');
    }
}