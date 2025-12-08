<?php

namespace Tests\Unit;

use App\Http\Controllers\DescuentoController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**Descuento test */
    public function calcula_descuento_correctamente()
    {
        $controller = new DescuentoController;

        $resultado = $controller->calcularDescuento(100, 10);

        $this->assertIsFloat($resultado);
        $this->assertEquals(90.0, $resultado);
    }

    /** test */
    public function maneja_valores_invalidos()
    {
        $controller = new DescuentoController;

        $resultado = $controller->calcularDescuento(-50, 20);

        $this->assertEquals(0.0, $resultado);
    }
}
