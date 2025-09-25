<?php

require_once __DIR__ . '/ContaBanco.php'; 

$conta1 = new ContaBanco();
$conta1->IniConta("Luan", 100);

$conta2 = new ContaBanco();
$conta2->IniConta("Pedro", -50);

$conta3 = new ContaBanco();
$conta3->IniConta("Juan", 0);


$contas = [$conta1, $conta2, $conta3];

foreach ($contas as $conta) {
    $saldo = $conta->consultarSaldo();

    $situacao = match (true) {
        $saldo > 0 => "Positivo",
        $saldo < 0 => "Negativo",
        default => "Zero"
    };

    echo "Titular: {$conta->titular()}
     Saldo: R$ {$saldo}
     Situação: {$situacao}\n";
}