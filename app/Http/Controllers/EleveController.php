<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\ParentM;

class EleveController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Eleve::select('Matricule',
        'Nom','Prénom','الاسم العائلي','الاسم الشخصي','Sexe','Email', 'date_naissance','Adress','image')->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
public function create()
{
    return Eleve::select('Matricule',
        'Nom','Prénom','الاسم العائلي','الاسم الشخصي','Sexe','Email', 'date_naissance','Adress','image')->post();
   }

public function store(Request $request)
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
        'parent_id' => 'required',
        'type' => 'required'

    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $imageUrl = url('/images/'.$name);
    } else {
        $imageUrl = '';
    }

    $eleve = new Eleve([
        'Matricule'=>$request->get('Matricule'),
        'Nom' => $request->get('Nom'),
        'Prénom' => $request->get('Prénom'), 
        'الاسم العائلي' => $request->get('الاسم العائلي'),
        'الاسم الشخصي'=> $request->get('الاسم الشخصي'),
        'Sexe' => $request->get('Sexe'),
        'Email' => $request->get('Email'),
        'Adress' => $request->get('Adress'),
        'date_naissance' => $request->get('date_naissance'),
        'Tél' => $request->get('Tél'),
        'image' => $imageUrl,
        'parent_id' => $request->get('parent_id'),
        'type' => $request->get('type'), //  cette ligne est pour enregistrer le type de relation

    ]);
        $relation = [
            'eleve_id' => $eleve->id,
            'parent_id' => $request->get('parent_id'),
            'type' => $request->get('type')
        ];

        $eleve = new eleve($relation);
        

    $eleve->save();

    return response()->json([
                'message'=>'Elève ajouté avec succès'
            ]);
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

    $eleve->Nom = $request->get('nom');
    $eleve->Prénom = $request->get('prenom');
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
        $eleve = Eleve::with('parent')->findOrFail($id);
        return view('eleves.show', compact('eleve'));
    }

    public function destroy($id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();

        return redirect()->route('eleves.index')
        ->with('success', 'Eleve supprimé avec succès.');
    }
}