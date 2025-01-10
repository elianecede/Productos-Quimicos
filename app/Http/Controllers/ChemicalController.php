<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chemical;

class ChemicalController extends Controller
{
    public function show(Chemical $chemical)
    {
        return view('chemicals.detalles', compact('chemical'));
    }
    
    public function showById($id)
    {
        $chemical = Chemical::findOrFail($id);
        return view('chemicals.detalles', compact('chemical'));
    }
}
