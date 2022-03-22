<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use Illuminate\Validation\Rule;
class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();

        // $this->authorize('viewAny', entreprise::class);

        return view('entreprises.index', [
            'entreprises' => $entreprises
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', entreprise::class);
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',entreprise::class);

        $validated = $request->validate([
            'nom' => 'required|max:255|unique:entreprises',
            'rue' => 'required|max:255',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'numero_de_telephone' => 'max:14|unique:entreprises|sometimes',
            'email' => 'required|email|max:255|unique:entreprises'
        ]);

        $entreprise = Entreprise::create($validated);

        return redirect()->route('entreprise.show', ['entreprise' => $entreprise->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('view',$id);

        $entreprise = Entreprise::find($id);
        return view('entreprises.show', [
            'entreprise' => $entreprise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        // $this->authorize('update',$entreprise);

        return view('entreprises.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
      // dd ($request->input('rue'));
      $this->authorize('update',$entreprise);
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'rue' => 'required|max:255',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'numero_de_telephone' => 'max:14|sometimes',
            'email' => 'required|email|max:255'
        ]);

        $entreprise->update($validated);
        return redirect()->route('entreprise.show', ['entreprise' => $entreprise->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $this->authorize('delete',$entreprise);
        $entreprise->delete();
        return redirect()->route('entreprise.index');
    }
}
