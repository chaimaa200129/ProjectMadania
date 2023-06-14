<?php

// app/Http/Controllers/SavoirController.php

namespace App\Http\Controllers;

use App\Models\Savoir;
use Illuminate\Http\Request;

class SavoirController extends Controller
{
    public function index()
    {
        $savoirs = Savoir::all();
        return response()->json($savoirs);
    }

    public function store(Request $request)
    {
        $savoir = Savoir::create($request->all());
        return response()->json($savoir, 201);
    }

    public function show($id)
    {
        $savoir = Savoir::findOrFail($id);
        return response()->json($savoir);
    }

    public function update(Request $request, $id)
    {
        $savoir = Savoir::findOrFail($id);
        $savoir->update($request->all());
        return response()->json($savoir, 200);
    }

    public function destroy($id)
    {
        Savoir::destroy($id);
        return response()->json(null, 204);
    }
}
