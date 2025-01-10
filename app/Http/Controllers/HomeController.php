<?php

namespace App\Http\Controllers;
use App\Models\Chemical;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $chemicals = Chemical::all(); // Obtiene todos los químicos
        return view('home', compact('chemicals'));
    }
}

