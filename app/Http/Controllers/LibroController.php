<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('backend.libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'anio' => 'required|integer|min:1500|max:' . date('Y'),
            'estado' => 'required|in:disponible,prestado',
        ]);

        Libro::create($validated);

        return redirect()->route('libros.index')->with('success', 'Libro creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('backend.libros.show', compact('libro'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('backend.libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'anio' => 'required|integer|min:1500|max:' . date('Y'),
            'estado' => 'required|in:disponible,prestado',
        ]);

        $libro->update($validated);

        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente.');
    }

}
