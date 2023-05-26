<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index()
    {
        $matieres = Matiere::all();
        return response()->json($matieres);
    }

    public function store(Request $request)
    {
        $matiere = Matiere::create($request->all());
        return response()->json($matiere, 201);
    }

    public function show($id)
    {
        $matiere = Matiere::findOrFail($id);
        return response()->json($matiere);
    }

    public function update(Request $request, $id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->update($request->all());
        return response()->json($matiere, 200);
    }

    public function destroy($id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->delete();
        return response()->json(null, 204);
    }
}
