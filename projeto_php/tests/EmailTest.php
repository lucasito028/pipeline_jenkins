<?php

use PHPUnit\Framework\TestCase;

include '.\..\src\Compra.php';

class CompraTest extends TestCase{

    public function testFreteGratis(){

        $compras = new Compra();
        $this->assertTrue($compra->freteGratis(180));
        
    }
}