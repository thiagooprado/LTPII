<?php
     class produtoDTO{
        private $id;
        private $nome;
        private $valor;
        private $quantidade;
        private $descricao;

        public function __construct(){

        }

        public function __setId($id){
          $this->id = $id;
        }

        public function __getId(){
          return $this->id;
        }

         public function __setnome($nome){
          $this->nome = $nome;
        }

        public function __getnome(){
          return $this->nome;
        }

         public function __setvalor($valor){
          $this->id = $valor;
        }

        public function __getvalor(){
          return $this->valor;
        }

         public function __setquantidade($quantidade){
          $this->quantidade = $quantidade;
        }

        public function __getquantidade(){
          return $this->quantidade;
        }

         public function __setdescricao($descricao){
          $this->descricao = $descricao;
        }

        public function __getdescricao(){
          return $this->descricao;
        }
     }
?>