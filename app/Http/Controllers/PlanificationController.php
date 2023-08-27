<?php

use App\Http\Controllers\Controller;
use App\Models\Planification;
use Illuminate\Http\Request;
use App\Models\Competence;
use App\Models\Savoir;
use App\Models\Domaine;
use App\Models\Periode;

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
        $planification = Planification::findOrFail($id);
        $planification->delete();
        return response()->json(null, 204);
    }

    public function getPlanningByNiveauAndMatiere($niveauId, $matiereId)
    {
        $planningData = [];

        $periodes = Periode::where('niveau_id', $niveauId)
            ->where('matiere_id', $matiereId)
            ->get();

        foreach ($periodes as $periode) {
            $domainesWithCompetences = [];
            $domaines = Domaine::where('matiere_id', $matiereId)->get();

            foreach ($domaines as $domaine) {
                $competences = Competence::where('domaine_id', $domaine->id)->get();
                $savoirs = [];

                foreach ($competences as $competence) {
                    $savoirs[] = Savoir::where('competence_id', $competence->id)
                        ->where('periode_id', $periode->id)
                        ->get();
                }

                $domainesWithCompetences[] = [
                    'domaine' => $domaine,
                    'competences' => $competences,
                    'savoirs' => $savoirs,
                ];
            }

            $planningData[] = [
                'periode' => $periode,
                'domaines' => $domainesWithCompetences,
            ];
        }

        return response()->json($planningData);
    }
}

