<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CycleController extends Controller
{
    public function index()
    {
        $cycles = Cycle::all();
        return response()->json($cycles);
    }

    public function show($id)
    {
        $cycle = Cycle::findOrFail($id);
        return response()->json($cycle);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $cycle = Cycle::create($request->all());

        return response()->json($cycle, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $cycle = Cycle::findOrFail($id);
        $cycle->update($request->all());

        return response()->json($cycle);
    }

    public function destroy($id)
    {
        $cycle = Cycle::findOrFail($id);
        $cycle->delete();

        return response()->json(null, 204);
    }
}
