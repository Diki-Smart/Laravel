<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborateur;

class CollaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborateurs = Collaborateur::all();

        return view('collaborateurs.index', [
            'collaborateurs' => $collaborateurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collaborateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'civilite' => 'required',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'rue' => 'required|max:255',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'numero_de_telephone' => 'max:14|unique:collaborateurs|sometimes',
            'email' => 'required|email|max:255|unique:collaborateurs',
            'entreprise_id' => 'required'
        ]);

        $collaborateur = Collaborateur::create($validated);
        return redirect()->route('collaborateur.show', ['collaborateur' => $collaborateur->id]);
    

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collaborateur = Collaborateur::find($id);
        return view('collaborateurs.show', [
            'collaborateur' => $collaborateur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborateur $collaborateur)
    {
        return view('collaborateurs.edit', ['collaborateur' => $collaborateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborateur $collaborateur)
    {
        $validated = $request->validate([
            'civilite' => 'required',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'rue' => 'required|max:255',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'numero_de_telephone' => 'max:14|sometimes',
            'email' => 'required|email|max:255'
        ]);

        $collaborateur->update($validated);
        return redirect()->route('collaborateur.show', ['collaborateur' => $collaborateur->id]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborateur $collaborateur)
    {
        $collaborateur->delete();
        return redirect()->route('collaborateur.index');
    }
}
