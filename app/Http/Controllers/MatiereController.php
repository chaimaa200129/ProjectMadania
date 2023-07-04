<?php

namespace App\Http\Controllers;
use App\Models\Domaine;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Models\Competence;
use App\Models\Savoir;

class MatiereController extends Controller
{
    public function index()
    {
        $matieres = Matiere::all();
        return response()->json($matieres);
    }

    public function store(Request $request)
    {
        $matiere = Matiere::create($request->all());
        return response()->json($matiere, 201);
    }

    public function show($id)
    {
        $matiere = Matiere::findOrFail($id);
        return response()->json($matiere);
    }

    public function update(Request $request, $id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->update($request->all());
        return response()->json($matiere, 200);
    }

    public function destroy($id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->delete();
        return response()->json(null, 204);
    }
    public function getDomainesByMatiereId($id, $periode)
    {
        $domainesWithCompetences = [];
        $domaines = Domaine::where('matiere_id', $id)->get();

        foreach ($domaines as $domaine) {
            $competences = Competence::where('domaine_id', $domaine->id)->get();
            $savoirs = [];

            foreach ($competences as $competence) {
                $savoirs[] = Savoir::where('competence_id', $competence->id)
                    ->where('periode_id', $periode)
                    ->get();
            }

            $domainesWithCompetences[] = [
                'domaine' => $domaine,
                'competences' => $competences,
                'savoirs' => $savoirs,
            ];
        }

        return response()->json($domainesWithCompetences);
    }
}