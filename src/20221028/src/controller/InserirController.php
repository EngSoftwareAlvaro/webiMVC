<?php

namespace App\model;

require_once "../model/Perguntas.php";


$pergunta = new Perguntas();

$pergunta->setPergunta($_POST["pergunta"]);
$pergunta->setStatus($_POST["statusPergunta"]);


$pergunta->criar();
