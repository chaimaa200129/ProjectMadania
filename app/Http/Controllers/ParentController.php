<?php

namespace App\Http\Controllers;

use App\Models\ParentM;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $parents = ParentM::all();
        return view('parents.index', compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Civilité' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:parents',
            'Adress' => 'required',
            'tél' => 'required|numeric|unique:parents',
            'Identifiant' => 'required'
        ]);

        $parent = new ParentM();
        $parent->Civilité = $validatedData['Civilité'];
        $parent->Nom = $validatedData['Nom'];
        $parent->Prénom = $validatedData['Prénom'];
        $parent->Email = $validatedData['Email'];
        $parent->Adress = $validatedData['Adress'];
        $parent->tél = $validatedData['tél'];
        $parent->Identifiant = $validatedData['Identifiant'];

        $parent->save();

        return redirect()->route('parents.index')->with('success', 'Le parent a été ajouté avec succès.');
    }

    public function show($id)
    {
        $parent = ParentM::findOrFail($id);
        return view('parents.show', compact('parent'));
    }

    public function edit($id)
    {
        $parent = ParentM::findOrFail($id);
        return view('parents.edit', compact('parent'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Civilité' => 'required',
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:parents,email,' . $id,
            'Adress' => 'required',
            'tel' => 'required|numeric|unique:parents,tél,' . $id ,
            'Identifiant' => 'required',
        ]);

        $parent = ParentM::findOrFail($id);
        $parent->Civilité = $validatedData['Civilité'];
        $parent->Nom = $validatedData['Nom'];
        $parent->Prénom = $validatedData['Prénom'];
        $parent->Email = $validatedData['Email'];
        $parent->Adress = $validatedData['Adress'];
        $parent->tél = $validatedData['tél'];
        $parent->Identifiant = $validatedData['Identifiant'];
        $parent->save();

        return redirect()->route('parents.index')->with('success', 'Le parent a été modifié avec succès.');
    }

    public function destroy($id)
    {
        $parent = ParentM::findOrFail($id);
        $parent->delete();

        return redirect()->route('parents.index')->with('success', 'Le parent a été supprimé avec succès.');
    }
}
