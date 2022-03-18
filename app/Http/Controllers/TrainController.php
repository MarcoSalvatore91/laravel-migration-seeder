<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
