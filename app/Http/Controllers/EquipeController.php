<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipe = Equipe::all();
        return view('equipes.index', compact('equipe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom' => 'required',
            'score' => 'required|integer|min:0',
        ]);

        Equipe::create($validatedData);

        return redirect()->route('equipe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipe $equipe)
    {
        return view('equipes.show', compact('equipe'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipe $equipe)
    {
        return view('equipes.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipe $equipe)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'score' => 'required|integer|min:0',
        ]);

        $equipe->update($validatedData);

        return redirect()->route('equipe.show', $equipe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();

        return redirect()->route('equipe.index');
    }
}
