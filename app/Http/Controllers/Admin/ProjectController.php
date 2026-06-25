<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Mostrar listado de proyectos
     */
    public function index()
    {
        return view('admin.projects.index');
    }

    /**
     * Mostrar formulario de creación
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Guardar nuevo proyecto
     */
    public function store(Request $request)
    {
        // Aquí luego conectamos con DB (Eloquent)
        // Ejemplo base:
        // Project::create($request->all());

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Mostrar un proyecto específico
     */
    public function show($id)
    {
        return view('admin.projects.show', compact('id'));
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit($id)
    {
        return view('admin.projects.edit', compact('id'));
    }

    /**
     * Actualizar proyecto
     */
    public function update(Request $request, $id)
    {
        // Project::findOrFail($id)->update($request->all());

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyecto actualizado correctamente');
    }

    /**
     * Eliminar proyecto
     */
    public function destroy($id)
    {
        // Project::findOrFail($id)->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyecto eliminado correctamente');
    }
}