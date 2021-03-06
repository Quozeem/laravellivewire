<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RatesTable extends Migration
{ /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('shipping', function (Blueprint $table) {
    
           $table->id();
           $table->timestamps();
           $table->rememberToken();
           $table->string('state_id');
           $table->string('rates');
           $table->string('states_name');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('shipping');
   }
}
