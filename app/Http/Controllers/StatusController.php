<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function seedStatuses()
    {
        $statuses = [
            ['name' => 'À évaluer'],
            ['name' => 'En cours d\'évaluation'],
            ['name' => 'Terminé'],
            ['name' => 'Publié'],
        //    ['name' => 'Non publié'],
        ];

        foreach ($statuses as $key => $statusData) {
            $status = new Status();
            $status->id = $key; // Utilisation de $key comme ID
            $status->name = $statusData['name'];
            $status->save();
        }

        return response()->json(['message' => 'Statuts insérés avec succès'], 200);
    }
}
