<?php
    class Cliente{
        private $nome ;
        private $idade ;
        private $cpf ;
        
        public function __construct($nome , $idade , $cpf){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
        }
        public function getNome(){
            return $this->nome ;
        }
        
        public function getIdade(){
            return $this->idade ;
        }
        
        public function getCpf(){
            return $this->cpf ;
        }
        
        public function setNome($nome){
            $this->nome = $nome ;
        }
        public function setIdade($idade){
            $this->idade = $idade ;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf ;
        }
        public function __toString(){
            $resultado = "Nome: " . $this->getNome() . "\t" . "Idade: " . $this->getIdade();
            return $resultado;
        }
    }
    // Classe Cliente -- fim
