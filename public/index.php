<?php

// Iniciando sessão
session_start();

// Adição de autoload
require '../vendor/autoload.php';

// Tratamento inicial
$app = new \App\Core\App();