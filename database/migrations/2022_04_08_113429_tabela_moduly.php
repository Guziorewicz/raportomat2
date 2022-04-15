<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaModuly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('modul_1')->default('0')->after('two_factor_confirmed_at');
            $table->text('modul_2')->default('0');
            $table->text('modul_3')->default('0');
            $table->text('modul_4')->default('0');
            $table->text('modul_5')->default('0');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('modul_1, modul_2, modul_3, modul_4, modul_5');
        
    });
}
}
