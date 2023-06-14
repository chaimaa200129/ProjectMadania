<?php

// app/Http/Controllers/PlanificationController.php

namespace App\Http\Controllers;

use App\Models\Planification;
use Illuminate\Http\Request;

class PlanificationController extends Controller
{
    public function index()
    {
        $planifications = Planification::all();
        return response()->json($planifications);
    }

    public function store(Request $request)
    {
        $planification = Planification::create($request->all());
        return response()->json($planification, 201);
    }

    public function show($id)
    {
        $planification = Planification::findOrFail($id);
        return response()->json($planification);
    }

    public function update(Request $request, $id)
    {
        $planification = Planification::findOrFail($id);
        $planification->update($request->all());
        return response()->json($planification, 200);
    }

    public function destroy($id)
    {
        Planification::destroy($id);
        return response()->json(null, 204);
    }
}
