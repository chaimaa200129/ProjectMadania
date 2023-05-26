<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ParentM;
use App\Models\Eleve;


class ParentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
   public function index()
    {
        $parents = ParentM::all();

        return response()->json(['parents' => $parents], 200);
    } 
 /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
{
    return ParentM::select('Civilité',
        'Nom','Prénom','Tél','Identifiant')->post();
   }

    public function store(Request $request)
    {
        $request->validate([
            'Civilité' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:parents',
            'Adress' => 'required',
            'tél' => 'required|numeric|unique:parents',
            'Identifiant' => 'required'
        ]);

        $parent = new ParentM([
            'Identifiant' => $request->get('Identifiant'),
            'Nom' => $request->get('Nom'),
            'Prénom' => $request->get('Prénom'),
            'Civilité' => $request->get('Civilité'),
            'Email' => $request->get('Email'),
            'Adress' => $request->get('Adress'),
            'tél' => $request->get('tél'),
        ]);
       
        $parent->save();

        return response()->json([
                'message'=>'Parent ajouté avec succès'
            ]);   
         }

        public function show($id)
{
    $parent = ParentM::find($id);
    return response()->json($parent);
}


    public function edit($id)
    {
        $parent = ParentM::findOrFail($id);
        return view('parents.edit', compact('parent'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Civilité' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:parents,email,' . $id,
            'Adress' => 'required',
            'tel' => 'required|numeric|unique:parents,tél,' . $id ,
            'Identifiant' => 'required',
        ]);

        $parent = ParentM::find($id);
        $parent->Civilité =  $request->get('Civilité');
        $parent->Nom =  $request->get('Nom');
        $parent->Prénom =  $request->get('Prénom');
        $parent->Email =  $request->get('Email');
        $parent->Adress = $request->get('Adress');
        $parent->tél =  $request->get('tél');
        $parent->Identifiant =  $request->get('Identifiant');
        $parent->save();

        return redirect()->route('parents.index')->with('success', 'Le parent a été modifié avec succès.');
    }

       public function destroy($id)
{
    $parent = ParentM::find($id);

    if (!$parent) {
        return response()->json(['message' => 'Le parent n\'existe pas'], 404);
    }

    $parent->delete();
    return response()->json(['message' => 'Le parent a été supprimé avec succès']);
}

}
