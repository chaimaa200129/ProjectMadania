<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    public function index()
    {
        $domaines = Domaine::all();
        return response()->json($domaines);
    }

    public function store(Request $request)
    {
        $domaine = Domaine::create($request->all());
        return response()->json($domaine, 201);
    }

    public function show($id)
    {
        $domaine = Domaine::find($id);
        return response()->json($domaine);
    }

    public function update(Request $request, $id)
    {
        $domaine = Domaine::find($id);
        $domaine->update($request->all());
        return response()->json($domaine);
    }

    public function destroy($id)
    {
        Domaine::destroy($id);
        return response()->json(null, 204);
    }
}
