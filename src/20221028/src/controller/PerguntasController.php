<?php

namespace App\Model;

require_once 'model/Perguntas.php';

class PerguntaController{
    public function exibir(){
        $pergunta = new Pergunta();

        $_REQUEST['perguntas'] =  $pergunta->ler();

        require_once 'view/perguntas_view.php';
    }
}