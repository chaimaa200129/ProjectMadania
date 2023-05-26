<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return response()->json($classes);
    }

    public function show($id)
    {
        $classe = Classe::findOrFail($id);
        return response()->json($classe);
    }

    public function store(Request $request)
    {
        $request->validate([
            'classe' => 'required',
            'cycle_id' => 'required',
            'niveau_id' => 'required',
        ]);

        $classe = Classe::create($request->all());
        return response()->json($classe, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'classe' => 'required',
            'cycle_id' => 'required',
            'niveau_id' => 'required',
        ]);

        $classe = Classe::findOrFail($id);
        $classe->update($request->all());

        return response()->json($classe, 200);
    }

    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();

        return response()->json(null, 204);
    }
}
