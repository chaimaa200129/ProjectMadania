<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index()
    {
        $niveaux = Niveau::all();
        return response()->json($niveaux);
    }

    public function show($id)
    {
        $niveau = Niveau::findOrFail($id);
        return response()->json($niveau);
    }

    public function store(Request $request)
    {
        $request->validate([
            'niveau' => 'required',
            'cycle_id' => 'required',
        ]);

        $niveau = Niveau::create($request->all());
        return response()->json($niveau, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'niveau' => 'required',
            'cycle_id' => 'required',
        ]);

        $niveau = Niveau::findOrFail($id);
        $niveau->update($request->all());

        return response()->json($niveau, 200);
    }

    public function destroy($id)
    {
        $niveau = Niveau::findOrFail($id);
        $niveau->delete();

        return response()->json(null, 204);
    }
}
