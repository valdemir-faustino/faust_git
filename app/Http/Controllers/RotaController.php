<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rota;

class RotaController extends Controller
{
    public function index()
    {
        $cads= Rota::all();
        return view('index', compact('cads'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
         'name'=>'required'
        ]);
           $cads=Rota::create([
           'name'=>$request->input('name')
        ]);
        return redirect()->route('index');
    }
}
