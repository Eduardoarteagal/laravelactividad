<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class proyectoController extends Controller
{
    /**
     * Listado
     */
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view('proyecto.index', ['proyectos' => $proyectos]);
    }

    /**
     *  Crear (vista)
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     *  Guardar
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'Descripcion' => 'required',
        ]);

        proyecto::create($request->all());
        return redirect()->route('proyecto.index')->with('succes','Post created successfully.');
    }

    /**
     * No se usa
     */
    public function show(proyecto $proyecto)
    {
        //
    }

    /**
     * Editar (vista)
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Actualizar
     */
    public function update(Request $request, $id)
    {
        $request->validate([
             'name' => 'required|max:255',
             'Descripcion' => 'required',
         ]);
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return redirect()->route('proyecto.index')->with('success','Post updates successfully.');
    }

    /**
     * Eliminar
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto -> delete();
        return redirect()-> route('proyecto.index')->with('succes','product deleted successfully');
    }
}
