<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Classe;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();

        return response()->json($evaluations);
    }

    public function show(Evaluation $evaluation)
    {
        return response()->json($evaluation);
    }

    public function store(Request $request)
    {
        $evaluation = Evaluation::create($request->all());

        return response()->json($evaluation, 201);
    }

    public function update(Request $request, Evaluation $evaluation)
    {
        $evaluation->update($request->all());

        return response()->json($evaluation);
    }

    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();

        return response()->json(null, 204);
    }

    public function getStatus(Evaluation $evaluation)
    {
        if ($evaluation->status_id === null) {
            return 'À évaluer';
        } elseif ($evaluation->status_id == 1) {
            return 'En cours d\'évaluation';
        } elseif ($evaluation->status_id == 2) {
            return 'Terminé';
        } elseif ($evaluation->status_id == 3) {
            return 'Publié';
        } else {
            return 'Non publié';
        }
    }

    public function updateStatus(Request $request, Evaluation $evaluation)
    {
        $statusId = $request->input('status_id');
        $evaluation->status_id = $statusId;
        $evaluation->save();

        return response()->json(['message' => 'Statut mis à jour avec succès'], 200);
    }
     public function getEvaluationsForClass($classeId)
    {
        // Récupérer les informations sur la classe, y compris le niveau et la matière
        $classe = Classe::with('niveau', 'matiere')->findOrFail($classeId);

        // Récupérer les évaluations associées au niveau et à la matière de la classe
        $evaluations = Evaluation::where('niveau_id', $classe->niveau_id)
            ->where('matiere_id', $classe->matiere_id)
            ->get();

        return response()->json([
            'classe' => $classe,
            'evaluations' => $evaluations,
        ]);
    }
}
