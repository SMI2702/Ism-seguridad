<?php

namespace Tests\Unit;

use App\Http\Controllers\ControllerAlo;
use Tests\TestCase;

class ExampleAlonsoTest extends TestCase
{
    public function test_ordenar_marcas_autos_orden_array_correcto()
    {
        $controller = new ControllerAlo;

        $input = ['Toyota', 'ford', ' BMW ', 'audi','chevy'];
        $expected = ['audi', 'BMW', 'chevy','ford', 'Toyota'];

        $result = $controller->ordenarMarcasAutos($input);

        $this->assertEquals($expected, $result);
    }
}
