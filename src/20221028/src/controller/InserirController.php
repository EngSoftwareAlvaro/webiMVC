<?php

namespace App\model;

require_once "../model/Perguntas.php";


$pergunta = new Perguntas();

$pergunta->setNome($_POST["nome"]);
$pergunta->setStatus($_POST["statusUsuario"]);
$pergunta->setUsuario_Id($_POST["usuario_id"]);

$usuario->criar();
