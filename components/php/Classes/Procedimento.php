<?php

    class Procedimento 
    {
        private string $nome;
        private string $data;

        public function __construct($nome,$data)
        {
            $this->nome = $nome;
            $this->data = $data;
        }

        public function getData()
        {
            return $this->data;
        }

        public function getNome()
        {
            return $this->nome;
        }
    }

    
    



?>