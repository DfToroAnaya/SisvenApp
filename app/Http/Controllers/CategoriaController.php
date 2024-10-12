<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Categorias;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:64|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        Categorias::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()-> route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categorias::find($id);

        return view('categorias.edit', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        'description' => 'required|max:255',
        ]);

        $categorias =Categorias::find($id);

        $categorias->name = $request->input('name');
        $categorias->description = $request->input('description');
        $categorias->save();

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = Categorias::find($id);

        $categorias->delete();

        return redirect()->route('categorias.index');
    }
}
