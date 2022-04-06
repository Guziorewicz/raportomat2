<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nowakol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lista', function ($table) {
            $table->text('nazwa');
            $table->text('zakres'); //nowa migracja ze zmianą struktury tabeli 
        
        });
        Schema::table('raport', function ($table) {
            $table->boolean('active');
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
