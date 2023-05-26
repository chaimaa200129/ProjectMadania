<?php
namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = Periode::all();
        return response()->json($periodes);
    }

    public function show($id)
    {
        $periode = Periode::findOrFail($id);
        return response()->json($periode);
    }

    public function store(Request $request)
    {
        $periode = Periode::create($request->all());
        return response()->json($periode, 201);
    }

    public function update(Request $request, $id)
    {
        $periode = Periode::findOrFail($id);
        $periode->update($request->all());
        return response()->json($periode, 200);
    }

    public function destroy($id)
    {
        Periode::destroy($id);
        return response()->json(null, 204);
    }
}
