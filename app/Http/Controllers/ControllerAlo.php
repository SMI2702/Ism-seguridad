<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerAlo extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Recibe un array de marcas de autos y los ordena alfabéticamente.
     */
    public function ordenarMarcasAutos(array $brands): array
    {
        // Normaliza y limpia entradas
        $brands = array_map(fn ($brand) => trim((string) $brand), $brands);

        // Ordena alfabéticamente sin importar mayúsculas/minúsculas
        natcasesort($brands);

        // Reindexa los valores
        return array_values($brands);
    }
}
