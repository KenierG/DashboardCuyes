<?php

namespace App\Http\Controllers;

use App\Models\cuy;
use Illuminate\Http\Request;

class CuyController extends Controller
{


    // Para visualizar todos los datos
    public function index()
    {
        //return view('ruta', [
        //    'cuyes' => cuy::all()
        //]);
    }

    //Para ir a la vista de crear cuyes
    public function create()
    {
        // return view('ruta.create');
    }

    //Para guardar en la bbdd el cuy
    public function store(Request $request)
    {
        //$request->validate([
        //    'name' => 'required|string|max:255',
        //    'age' => 'required|string|max:255',
        //    'size_width' => 'required|string|max:255',
        //    'size_heigth' => 'required|string|max:255',
        //    'weigth' => 'required|string|max:255',
        //    'sheds_id' => 'required|string|max:255',
        //    // Añadir más validaciones según tus necesidades
        //]);

        //Cuy::create($request->all());

        //return redirect()->route('ruta.index')->with('success', 'Cuy creado exitosamente');

    }
    //Para ir a la vista de un cuy
    public function show(cuy $cuy)
    {
        //return view('ruta.show', compact('cuy'));
    }
    //Para ir a la vista de editar cuy
    public function edit(cuy $cuy)
    {
        //return view('ruta.edit', compact('cuy'));
    }

    //Para actualizar cuy
    public function update(Request $request, cuy $cuy)
    {
        //
    }
    //Para eliminar cuy
    public function destroy(cuy $cuy)
    {
        //     $cuy->delete();
        //     return redirect()->route('ruta.index')->with('success', 'Cuy eliminado exitosamente');

    }
}
