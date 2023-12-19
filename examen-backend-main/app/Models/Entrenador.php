<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrenador extends Model
{
    public $timestamps = false;

    public $table = "entrenadores";

    protected $fillable = ['nombre'];

    public static function cleanEntrenadorDetalle($entrenadorData)
    {
        $entrenador = [];
        foreach ($entrenadorData as $entrenadorElement) {
            $entrenador['id'] = $entrenadorElement['id'];
            $entrenador['nombre'] = $entrenadorElement['nombre'];
            $equipos[$entrenadorElement['id_equipos']] = [
                'id' => $entrenadorElement['id_equipos'],
                'nombre' => $entrenadorElement['nombre_equipos']
            ];
            $pokemones[] =                 [
                'id_equipos' => $entrenadorElement['id_equipos'],
                'id' => $entrenadorElement['id_pokemones'],
                'nombre' => $entrenadorElement['nombre_pokemones'],
                'tipo' => json_decode($entrenadorElement['tipos_pokemones']),
                'orden' => $entrenadorElement['orden_pokemones']
            ];
        }

        foreach ($equipos as &$equipo) {
            foreach ($pokemones as $key => $pokemon) {
                if ($pokemon['id_equipos'] == $equipo['id']) {
                    unset($pokemon['id_equipos']);
                    $equipo['pokemones'][] = $pokemon;
                    unset($pokemones[$key]);
                }
            }
            $entrenador['equipos'][] = $equipo;
        }
        return $entrenador;
    }
}
