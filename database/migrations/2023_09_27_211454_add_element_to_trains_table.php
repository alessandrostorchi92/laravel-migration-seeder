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
            //Modifico l'attributo alla colonna "cancellato" in ->comment("")

            //Modifico la colonna "cancellato" che già esiste
            $table->boolean("cancellato")->default(0)->comment("Indica che l'elemento non è visibile di default")->change();
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
            //Se vogliamo modificare una colonna qui dobbiamo inserire la colonna prima della modifica

            // Inserisco la colonna prima della modifica da effettuare 
            $table->boolean("cancellato")->default(0)->element("Indica che l'elemento non è visibile di default")->change();
        });
    }
};
