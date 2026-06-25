<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Listado de tareas
     */
    public function index()
    {
        return view('admin.tasks.index');
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('admin.tasks.create');
    }

    /**
     * Guardar nueva tarea
     */
    public function store(Request $request)
    {
        // Aquí luego conectamos con DB (Eloquent)
        // Ejemplo:
        // Task::create($request->all());

        return redirect()->route('admin.tasks.index')
            ->with('success', 'Tarea creada correctamente');
    }

    /**
     * Ver detalle de una tarea
     */
    public function show($id)
    {
        return view('admin.tasks.show', compact('id'));
    }

    /**
     * Formulario de edición
     */
    public function edit($id)
    {
        return view('admin.tasks.edit', compact('id'));
    }

    /**
     * Actualizar tarea
     */
    public function update(Request $request, $id)
    {
        // Task::findOrFail($id)->update($request->all());

        return redirect()->route('admin.tasks.index')
            ->with('success', 'Tarea actualizada correctamente');
    }

    /**
     * Eliminar tarea
     */
    public function destroy($id)
    {
        // Task::findOrFail($id)->delete();

        return redirect()->route('admin.tasks.index')
            ->with('success', 'Tarea eliminada correctamente');
    }
}