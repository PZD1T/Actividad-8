<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisions;
class DivisionsController extends Controller
{
    public function index()
    {
        $divisions = Divisions::select('id', 'conf', 'divsn')->get();
          
        return view('divisions.index', compact('divisions'));
    }
}