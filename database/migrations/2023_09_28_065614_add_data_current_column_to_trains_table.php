<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            
            $table->date("Data_di_partenza")->after("Codice_treno");
            $table->time("Orario_di_partenza")->change();
            $table->time("Orario_di_arrivo")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->dropColumn("Data_di_partenza")->after("Codice_treno");
            $table->string('Orario_di_partenza', 5)->change();
            $table->string('Orario_di_arrivo', 5)->change();
        });
    }
};
