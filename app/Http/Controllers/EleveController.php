<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\ParentM;
use Illuminate\Http\Response;

class EleveController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $eleves = Eleve::all();

        return response()->json(['eleves' => $eleves], 200);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
public function create()
{
    return Eleve::select('Matricule',
        'Nom','Prénom','الاسم العائلي','الاسم الشخصي','Sexe','Email', 'date_naissance','Adress','image')->post();
   }

// app/Http/Controllers/EleveController.php


    public function store(Request $request)
{
    $request->validate([
        'Nom' => 'required',
        'Prénom' => 'required',
        'date_naissance' => 'required|date',
    ]);

    $eleve = new Eleve;
    $eleve->Nom = $request->input('Nom');
    $eleve->Prénom = $request->input('Prénom');
    $eleve->date_naissance = $request->input('date_naissance');
    $eleve->save();

    return response()->json($eleve, 201);
}

public function edit($id)
{
    $eleve = Eleve::find($id);
    $parents = ParentM::all();
    return view('eleves.edit', compact('eleve', 'parents'));
} 

public function update(Request $request, $id)
{
    $request->validate([
            'Matricule' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'الاسم العائلي' => 'required',
            'الاسم الشخصي' => 'required',
            'Sexe' => 'required',
            'date_naissance' => 'required|date',
            'Email' => 'required|Email|unique:eleves,Email',
            'Adress' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'parent_id' => 'required'
    ]);

    $eleve = Eleve::find($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $imageUrl = url('/images/'.$name);
    } else {
        $imageUrl = $eleve->image;
    }

    $eleve->Nom = $request->get('Nom');
    $eleve->Prénom = $request->get('Prénom');
    $eleve->date_naissance = $request->get('date_naissance');
    $eleve->Adress = $request->get('Adress');
    $eleve ->Matricule = $request->get('Matricule');
    $eleve->Sexe = $request->get('Sexe');
    $eleve->Email =  $request->get('Email');
    $eleve->Tél = $request->get('Tél');
    $eleve->parent_id = $request->get('parent_id');


}
    public function show($id)
{
    $eleve = Eleve::find($id);
    return response()->json($eleve);
}


    public function destroy($id)
{
    $eleve = Eleve::find($id);

    if (!$eleve) {
        return response()->json(['message' => 'L\'élève n\'existe pas'], 404);
    }
                            
    $eleve->delete();
    return response()->json(['message' => 'L\'élève a été supprimé avec succès']);
}

}