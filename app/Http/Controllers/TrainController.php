<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller {

    public function index() {

        $dati = Train::where('Data_di_partenza', '=', '2023-09-28')->orderBy('Data_di_partenza', 'asc')->get();

        // dd($dati); OK 

		return view('homepage',["trains"=>$dati]);
        
	}
    
}
