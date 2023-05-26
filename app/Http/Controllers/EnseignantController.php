<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::all();
        return response()->json($enseignants);
    }

    public function show($id)
    {
        $enseignant = Enseignant::find($id);
        return response()->json($enseignant);
    }

    public function store(Request $request)
    {
        $enseignant = Enseignant::create($request->all());
        return response()->json($enseignant, 201);
    }

    public function update(Request $request, $id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->update($request->all());
        return response()->json($enseignant);
    }

    public function destroy($id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->delete();
        return response()->json(null, 204);
    }
}
