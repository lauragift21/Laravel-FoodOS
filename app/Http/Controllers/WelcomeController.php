<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('welcome', ['restaurants' => $restaurants]);
    }
}
