<?php

namespace App\Api\V1\Controllers;

use Exception;
use App\Models\Entrenador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EntrenadorController extends Controller
{

    public function index() 
    {
        $entrenador = Entrenador::orderBy('created_at', 'DESC')->get();
        return view('entrenadores.index', compact('entrenador'));
    }


    public function crear(Request $request)
    {
        $nombre = $request->nombr;
        return view('entrenador.create');
        try {
            if (empty($nombre)) {
                throw new Exception("Debe Ingresar el nombre.");
            }
            $entrenador = Entrenador::create([
                'nombre' => $nombre
            ]);
            return [
                'status' => 'ok',
                'id_entrenador' => $entrenador->id
            ];
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function store(Request $request) 
    {
        Entrenador::create($request->all());

        return redirect()->route('entrenador.index')-with('success', 'Entrenador agregado correctamente');
    }

    // Mostrar un entrenador en especifico
    public function show(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);
 
        return view('entrenador.show', compact('entrenador'));
    }

    // mostrar el form para editar un entrenador en especifico
    public function edit(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);

        return view('entrenador.edit', compact('entrenador'));
    }

    // Actualizar/update item específico en storage
    public function update() 
    {   
        $entrenador = Entrenador::findOrFail($id);

        $entrenador->update($request->all());

        return redirect()->route('entrenador.index')->with('success', 'Entrenador actualizado correctamente');
    }

    // Remover del storage
    public function destroy(string $id)
    {
        $entrenador = Entrenador::findOrFail($id);

        $entrenador->delete();

        return redirect()->route('entrenador.index')->with('success', 'Entrenador eliminado correctamente');
    }


    public function detalle()
    {
        //
    }
}
