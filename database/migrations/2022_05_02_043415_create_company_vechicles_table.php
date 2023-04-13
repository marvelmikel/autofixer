<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyVechiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_vechicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
              $table->string('v_make', 255)->nullable();
              $table->string('v_model', 255)->nullable();
              $table->string('v_year')->nullable();
              $table->string('vin', 20)->nullable();
             $table->string('v_reg')->nullable();
             $table->timestamps();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_vechicles');
    }
}
