<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
      public function index()
    {
        $departements = Departement::all();

        return response()->json(['departements' => $departements], 200);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
     public function show($id)
{
    $departement = Departement::find($id);
    return response()->json($departement);
}

    public function store(Request $request)
    {
        // Validation des données $request->validate(...)

        $departement = Departement::create($request->all());

        return response()->json([
            'message' => 'Département créé avec succès',
            'data' => $departement,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        // Validation des données $request->validate(...)

        $departement = Departement::findOrFail($id);
        $departement->update($request->all());

        return response()->json([
            'message' => 'Département mis à jour avec succès',
            'data' => $departement,
        ]);
    }

    public function destroy($id)
    {
        $departement = Departement::findOrFail($id);
        $departement->delete();

        return response()->json([
            'message' => 'Département supprimé avec succès',
        ]);
    }
}
