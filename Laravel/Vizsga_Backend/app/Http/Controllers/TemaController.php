<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function show()
    {
        $tema = DB::table('tema')
        ->get();
        return $tema;
    }

    public function index()
    {
        $products = Tema::all(); 
        return view('products/index', ['products'=>$products]);
    }

    public function show2()
    {
    $tema = Tema::all();
    return view('vizsgafeladat', ['temas' => $tema]);
}

public function create()
{
    $tema = Tema::all(['id', 'temanev']);

    return view('vizsgafeladat', compact('id', 'tema'));
}
}
