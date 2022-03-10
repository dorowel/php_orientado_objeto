<?php

require_once 'src/Conta.php';

$primeiroConta = new Conta();
$$primeiraConta = new Conta();
$primeiraConta->sacar(300); // isso é ok
$primeiraConta->saldo -=300; // isso não é ok