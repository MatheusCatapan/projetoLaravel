<?php

namespace App\Http\Controllers;

use App\Models\Explorador;
use Illuminate\Http\Request;

class ExploradorController extends Controller
{
    public function index()
    {
        $exploradores = \App\Models\Explorador::paginate(10);
        return view('exploradores', compact('exploradores'));
    }

    public function create()
    {
        return view('exploradores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255|unique:exploradores,nome',
            'idade' => 'required|integer|min:0',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        \App\Models\Explorador::create($request->all());

        return redirect()->route('exploradores.sucesso')->with('success', 'Explorador cadastrado com sucesso!');
    }
}