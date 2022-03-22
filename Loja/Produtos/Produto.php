<?php

    class Produto{

        private $idProduto;
        protected $tipo;
        protected $marca;
        protected $modelo;
        protected $tamanho;
        protected $cor;
        protected $data_lancamento; 
        protected $ocasiao;

        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao){
            $this->tipo = $tipo;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->tamanho = $tamanho;
            $this->cor = $cor;
            $this->data_lancamento = $data_lancamento;
            $this->ocasiao = $ocasiao;
        }
        
        //Getters and Setters:----------------------

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getTamanho(){
            return $this->tamanho;
        }
        public function setTamanho($tamanho){
            $this->tamanho = $tamanho;
        }

        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getData_lancamento(){
            return $this->data_lancamento;
        }
        public function setData_lancamento($data_lancamento){
            $this->data_lancamento = $data_lancamento;
        }

        public function getOcasiao(){
            return $this->ocasiao;
        }
        public function setOcasiao($ocasiao){
            $this->ocasiao = $ocasiao;
        }

        //-----------------------------------------

    }

?>