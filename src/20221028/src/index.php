<?php

use App\Model\PerguntasController;

    require_once 'controller/PerguntasController.php';

    $question = new PerguntasController();
    $question->exibir();
