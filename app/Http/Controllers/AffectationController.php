<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Affectation;

class AffectationController extends Controller
{
    public function index()
    {
        $affectations = Affectation::all();

        return response()->json($affectations);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'enseignant_id' => 'required|exists:enseignants,id',
            'matiere_id' => 'required|exists:matieres,id',
            'classe_id' => 'required|exists:classes,id',
        ]);

        $affectation = Affectation::create($validatedData);

        return response()->json($affectation, 201);
    }

    public function show($id)
    {
        $affectation = Affectation::findOrFail($id);

        return response()->json($affectation);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'enseignant_id' => 'required|exists:enseignants,id',
            'matiere_id' => 'required|exists:matieres,id',
            'classe_id' => 'required|exists:classes,id',
        ]);

        $affectation = Affectation::findOrFail($id);
        $affectation->update($validatedData);

        return response()->json($affectation);
    }

    public function destroy($id)
    {
        $affectation = Affectation::findOrFail($id);
        $affectation->delete();

        return response()->json(null, 204);
    }
}
