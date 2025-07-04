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

    public function atualizar()
    {
        return view('exploradores.atualizar');
        
    }

    public function atualizarPost(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:exploradores,id',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $explorador = \App\Models\Explorador::find($request->id);
        $explorador->latitude = $request->latitude;
        $explorador->longitude = $request->longitude;
        $explorador->save();

        return redirect()->route('exploradores.sucesso')->with('success', 'Localização atualizada com sucesso!');
    }

    public function verItems(Request $request)
    {
        $exploradores = \App\Models\Explorador::all();
        return view('exploradores.itens', compact('exploradores'));
    }
}