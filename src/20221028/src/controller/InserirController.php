<?php

namespace App\model;

require_once "../model/Perguntas.php";


$pergunta = new Perguntas();

$pergunta->setNome($_POST["nome"]);
$pergunta->setStatus($_POST["statusUsuario"]);


$usuario->criar();
