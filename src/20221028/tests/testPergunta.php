<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Perguntas;

class PerguntaTest extends TestCase{
    public function testInterrogacao(){
        $perguntas = new Perguntas;
        //$perguntas->setPergunta("pergunta"); //teste para falhar
        $perguntas->setPergunta("pergunta?"); // teste ok 
        $this->assertEquals(substr($perguntas->getPergunta(),-1),"?");

    }
}


