<?php
      require './Compra.php';

        use PHPUnit\Framework\TestCase;
       
        use Compra;

        class CompraTest extends TestCase
        {
            public function testFreteGratis()
            {
                $compra = new Compra();
                $this->assertTrue($compra->freteGratis(150));
            }
        }