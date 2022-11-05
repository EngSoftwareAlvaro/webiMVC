<?php

namespace App\Model;

require_once 'model/Perguntas.php';

class PerguntasController{
    public function exibir(){
        $pergunta = new Perguntas();

        $_REQUEST['perguntas'] =  $pergunta->ler();

        require_once 'view/perguntas_view.php';
    }
}