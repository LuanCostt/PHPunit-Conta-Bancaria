<?php

class ContaBanco
{
    private string $titular;
    private float $saldo;

    public function IniConta(string $titular, float $saldoInicial = 0): void
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void
    {
        $this->saldo -= $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

    public function titular(): string
    {
        return $this->titular;
    }
}
?>