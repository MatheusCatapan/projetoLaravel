<?php

namespace App\Http\Controllers;

use App\Models\Explorador;
use Illuminate\Http\Request;

class ExploradorController extends Controller
{
    public function create()
    {
        $exploradores = \App\Models\Explorador::paginate(10);
        return view('exploradores', compact('exploradores'));
    }


    public function index()
    {
        $exploradores = \App\Models\Explorador::paginate(10);
        return view('exploradores', compact('exploradores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Explorador::create($request->all());

        return redirect()->route('exploradores.criado')->with('success', 'Explorador cadastrado com sucesso!');
    }
}