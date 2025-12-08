<?php

namespace App\Http\Controllers;

class DescuentoController extends Controller
{
    /*
     * Calcula el precio final después de aplicar un descuento.
     */
    public function calcularDescuento(float $precio, float $porcentaje): float
    {
        if ($precio < 0 || $porcentaje < 0 || $porcentaje > 100) {
            return 0.0; // Manejo simple de valores inválidos
        }

        $descuento = $precio * ($porcentaje / 100);

        return round($precio - $descuento, 2);
    }
}
