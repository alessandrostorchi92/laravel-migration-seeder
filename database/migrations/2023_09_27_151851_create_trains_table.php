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
    public function up(){

        // Di base tutte le tabelle sono nullable(false) perciò non possono essere lasciate vuote. 

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company', 50);
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);

            // Per visualizzare l'orario in questo formato(HH:MM) imposto la tipologia string 
            $table->string('Orario_di_partenza', 5);
            $table->string('Orario_di_arrivo', 5);

            $table->string('Codice_treno', 5);
            $table->string('Numero_carrozze',100);

            // I dati di queste tabelle devono essere di default false perchè devo specificare il loro valore 
            $table->boolean("in_orario")->nullable(true);
            $table->boolean("cancellato")->default(0);

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
        Schema::dropIfExists('trains');
    }
};
