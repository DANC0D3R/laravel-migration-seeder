<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();
        // dd($trains);
        return view('home', ['trains' => $trains]);
    }
}
