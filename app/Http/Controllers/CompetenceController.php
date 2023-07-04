<?php

// app/Http/Controllers/CompetenceController.php
namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public function index()
    {
        $competences = Competence::all();
        return response()->json($competences);
    }

    public function store(Request $request)
    {
        $competence = Competence::create($request->all());
        return response()->json($competence, 201);
    }

    public function show($id)
    {
        $competence = Competence::findOrFail($id);
        return response()->json($competence);
    }

    public function update(Request $request, $id)
    {
        $competence = Competence::findOrFail($id);
        $competence->update($request->all());
        return response()->json($competence, 200);
    }

    public function destroy($id)
    {
        Competence::destroy($id);
        return response()->json(null, 204);
    }
}
