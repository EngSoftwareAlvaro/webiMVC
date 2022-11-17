<?php
    namespace App\Model;

    class Imc {
        private $altura;
        private $peso;


        function __construct($altura = 0, $peso = 0) {
            $this->altura = $altura;
            $this->peso = $peso;
        }

        public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function getImc() {
            return $this->peso/($this->altura * $this->altura);
        }

        public function getClassificacao() {
            if($this->peso == 0 && $this->altura == 0)
                return false;

            $imc = $this->getImc();

            if($imc < 18.5)
                return $this->classificacao = "Magreza";

            else if($imc >= 18.5 && $imc < 25)
                return $this->classificacao = "Normal";

            else if($imc >= 25 && $imc < 30)
                return $this->classificacao = "Sobrepeso";

            else if($imc >= 30 && $imc < 35)
                return $this->classificacao = "Obesidade";

            else if($imc >= 35 && $imc < 40)
                return $this->classificacao = "Obesidade";

            else if($imc >= 40)
                return $this->classificacao = "Obesidade";
        }
        public function setClassificacao($classificacao) {
            $this->classificacao = $classificacao;
        }

        public function setGrau($grau) {
            $this->grau = $grau;
        }
        public function getGrau() {
            if($this->peso == 0 && $this->altura == 0)
                return false;

            $imc = $this->getImc();
            
            if($imc < 30)
                return $this->grau = "Grau 0";

            else if($imc >= 30 && $imc < 35)
                return $this->grau = "Grau I";

            else if($imc >= 35 && $imc < 40)
                return $this->classificacao = "Grau II";

                else if($imc >= 40)
                return $this->classificacao = "Grau III";
        }
    }