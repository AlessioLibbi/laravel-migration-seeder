<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class trainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
