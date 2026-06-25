<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Listado de usuarios
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Guardar usuario
     */
    public function store(Request $request)
    {
        // Aquí luego conectamos con DB (Eloquent)
        // Ejemplo:
        // User::create($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', 'Usuario creado correctamente');
    }

    /**
     * Mostrar usuario específico
     */
    public function show($id)
    {
        return view('admin.users.show', compact('id'));
    }

    /**
     * Formulario de edición
     */
    public function edit($id)
    {
        return view('admin.users.edit', compact('id'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, $id)
    {
        // User::findOrFail($id)->update($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Eliminar usuario
     */
    public function destroy($id)
    {
        // User::findOrFail($id)->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'Usuario eliminado correctamente');
    }
}