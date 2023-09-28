<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;

// Per generare dati fittizzi da inserire nelle tabelle del database mediante FakerPHP dobbiamo importare: 
use Faker\Generator as Faker;



class TrainsTableSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    //La classe Faker la passo come argomento all'interno della funzione run()
    public function run(Faker $faker) {

        
        $company = ['Trenitalia', 'Italo'];
        $departure_station = ['Milano Centrale', 'Roma Termini', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Venezia Santa Lucia', 'Torino Porta Nuova', 'Bologna Centrale', 'Genova Piazza Principe', 'Palermo Centrale', 'Catania Centrale'];
        $arrival_station = ['Verona Porta Nuova', 'Pisa Centrale', 'Torino Porta Susa', 'Padova Centrale', 'Bari Centrale', 'Reggio Emilia Centrale', 'Modena', 'Ancona', 'Trieste Centrale', 'Salerno'];
        $date = ['2023-09-27', '2023-09-28', '2023-09-29', '2023-09-30'];


        for ($i = 0; $i < 10; $i++) {
            
            // Creo istanza di train 
            $train = new Train();

            // Assegno i valori da attribuire a ciascuna colonna
            $train->Company = $faker->randomElement($company);
            $train->Stazione_di_partenza = $faker->unique()->randomElement($departure_station);
            $train->Stazione_di_arrivo = $faker->unique()->randomElement($arrival_station);
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Numero_carrozze = $faker->numberBetween(0, 100);
            $train->Codice_treno = $faker->regexify('[A-Z]{2}[0-9]{3}');
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean;
            $train->Data_di_partenza = $faker->randomElement($date);
            
            //Salvo i dati nel database
            $train->save();

        }
        
    }
}
