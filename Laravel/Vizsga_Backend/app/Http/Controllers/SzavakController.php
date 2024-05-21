<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class SzavakController extends Controller
{
    public function show()
    {
        $szavak = DB::table('szavak')
        ->get();
        return $szavak;
    }

    public function show2()
    {
        $szavak = DB::table('szavak')
        ->join('tema', 'tema.id', '=', 'szavak.temaId')
        ->get();
        return $szavak;
    }
}
