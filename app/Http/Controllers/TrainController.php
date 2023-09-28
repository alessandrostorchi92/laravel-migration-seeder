<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller {

    public function index() {

        $trains = Train::where('Data_di_partenza', '=', '2023-09-28')->orderBy('Data_di_partenza', 'asc')->get();

        dd($trains); OK 

		return view('homepage',["trains"=>$trains]);
        
	}
    
}
