<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nowabaza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Run the migrations.
         *
         * @return void
         */

            Schema::create('raport', function (Blueprint $table) {
                $table->id();
                $table->Biginteger('report_id');
                $table->string('call_time');
                $table->string('caller_id');
                $table->string('destination');
                $table->string('status');
                $table->string('ringing');
                $table->string('talking');
                $table->string('totals');
                $table->string('cost');
                $table->string('reason');
                $table->string('play');
                $table->timestamps();
            });
    
            Schema::create('lista', function (Blueprint $table){
                $table->id();
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
