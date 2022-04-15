<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableRelacjone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('relacje', function(Blueprint $table){
        $table->id();
        $table->integer('id_modul');
        $table->integer('id_user');
        $table->integer('id_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('relacje', function(Blueprint $table){
            $table->droptable('relacje');
        });
    }
}
