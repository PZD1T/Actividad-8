<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferences;

class ConferencesController extends Controller
{
    public function index()
    {
         $Conference = Conferences::select('id', 'title', 'conf')->get();
          
         return view('Conferences.index', compact('Conference'));
    }
}
