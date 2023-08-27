<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Affectation;
use Illuminate\Support\Facades\Response;

class AffectationController extends Controller
{
    public function index()
    {
        $affectations = Affectation::all();
        return Response::json($affectations);
    }

    public function store(Request $request)
    {
        $affectation = Affectation::create($request->all());
        return Response::json($affectation, 201);
    }

    public function show(Affectation $affectation)
    {
        return Response::json($affectation);
    }

    public function update(Request $request, Affectation $affectation)
    {
        $affectation->update($request->all());
        return Response::json($affectation);
    }

    public function destroy(Affectation $affectation)
    {
        $affectation->delete();
        return Response::json(null, 204);
    }
}
