<?php

    class Endereco
    {
        private string $endereco;
        private string $complemento;
        private string $cidade;
        private string $bairro;
        private string $estado_moradia;
        private int $numero;
        private int $cep;

        public function __construct(
            string $endereco,
            string $complemento,
            string $cidade,
            string $bairro,
            string $estado_moradia,
            int $numero,
            int $cep){
            $this->endereco = $endereco;   
            $this->numero = $numero;   
            $this->complemento = $complemento;   
            $this->bairro = $bairro;   
            $this->cidade = $cidade;   
            $this->estado_moradia = $estado_moradia;   
            $this->cep = $cep;   
        }

        public function toString(): string
        {
            $enderecoCompleto = $this->endereco." ".
            $this->numero. ", ".
            $this->complemento.". ".
            $this->bairro.", ".
            $this->cidade."-".
            $this->estado_moradia.". CEP: ".
            $this->cep;
            

            return $enderecoCompleto;
        }

        public function getCep(): int
        {
            return $this->cep;
        }


    }

?>