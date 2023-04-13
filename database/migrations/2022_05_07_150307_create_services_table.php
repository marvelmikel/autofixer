<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            //REPAIRS TABLE
            $table->string('r_date', 255)->nullable();
            $table->string('r_type', 255)->nullable();
            $table->string('r_cost')->nullable();

            //MAINTENANCE TABLE
            $table->string('m_date', 255)->nullable();
            $table->string('m_type', 255)->nullable();
            $table->string('m_cost')->nullable();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
