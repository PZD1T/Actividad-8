<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\DB; // Importa la fachada DB para usar consultas SQL personalizadas

class TeamsController extends Controller
{
    public function index()
    {
        // Realiza un INNER JOIN entre las tablas teams, divisions, cities y conferences
        $teams = DB::table('teams')
                    ->join('divisions', 'teams.id_division', '=', 'divisions.id')
                    ->join('cities', 'teams.id_city', '=', 'cities.id')
                    ->join('conferences', 'teams.id_conference', '=', 'conferences.id')
                    ->select('teams.*', 'divisions.divsn', 'cities.city', 'conferences.conf')
                    ->get();

        return view('teams.index', compact('teams'));
    }
}

