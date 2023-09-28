<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller {

    public function index() {
		return view("products.index");
	}
    
}
