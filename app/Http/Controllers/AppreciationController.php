<?php

namespace App\Http\Controllers;

use App\Models\Appreciation;
use Illuminate\Http\Request;

class AppreciationController extends Controller
{
    public function index()
    {
        // Afficher la liste des appréciations
        $appreciations = Appreciation::all();
        return response()->json($appreciations);
    }

    public function store(Request $request)
    {
        // Créer une nouvelle appréciation
        $request->validate([
            'eleve_id' => 'required|integer',
            'periode_id' => 'required|integer',
            'content' => 'required|string',
        ]);

        $appreciation = Appreciation::create($request->all());
        return response()->json($appreciation, 201);
    }

    public function show($id)
    {
        // Afficher une appréciation spécifique
        $appreciation = Appreciation::findOrFail($id);
        return response()->json($appreciation);
    }

    public function update(Request $request, $id)
    {
        // Mettre à jour une appréciation
        $request->validate([
            'eleve_id' => 'required|integer',
            'periode_id' => 'required|integer',
            'content' => 'required|string',
        ]);

        $appreciation = Appreciation::findOrFail($id);
        $appreciation->update($request->all());
        return response()->json($appreciation, 200);
    }

    public function destroy($id)
    {
        // Supprimer une appréciation
        $appreciation = Appreciation::findOrFail($id);
        $appreciation->delete();
        return response()->json(null, 204);
    }
}
