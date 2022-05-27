<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 

            //This is for authentication
            $table->string('is_auth')->nullable();

             //company's information
             $table->string('c_name', 255)->nullable();
             $table->string('c_address', 255)->nullable();
             $table->string('c_email')->unique()->nullable();
             $table->string('c_phone', 20)->nullable();
             
             //personal's information
             $table->string('p_name', 255)->nullable();
             $table->string('p_phone', 20)->nullable();
             $table->string('p_email')->unique()->nullable();
             $table->string('p_position', 255)->nullable();

               //personal's information
               $table->string('name', 255)->nullable();
               $table->string('phone', 255)->nullable();
               $table->string('email')->unique()->nullable();
               $table->timestamp('email_verified_at')->nullable();
               $table->string('city', 25)->nullable();
   
               //Login information
               $table->string('username', 255)->unique()->nullable();
               $table->string('password');


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
        Schema::dropIfExists('users');
    }
}
