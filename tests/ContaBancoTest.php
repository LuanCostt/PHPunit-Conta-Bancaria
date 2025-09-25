<?php

require_once __DIR__ . '/../src/ContaBanco.php';

use PHPUnit\Framework\TestCase;

class ContaBancoTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function testDeposito()
    {
        $conta = new ContaBanco();
        $conta->IniConta("Luan", 100);
        $conta->depositar(70);
        $this->assertEquals(170, $conta->consultarSaldo());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function testSaque()
    {
        $conta = new ContaBanco();
        $conta->IniConta("Teste", 100);
        $conta->sacar(20);
        $this->assertEquals(80, $conta->consultarSaldo());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function testSaldoNegativo()
    {
        $conta = new ContaBanco();
        $conta->IniConta("Teste", 20);
        $conta->sacar(70);
        $this->assertEquals(-50, $conta->consultarSaldo());
    }
}

?>