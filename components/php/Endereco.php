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
            $this->complemento = $complemento;   
            $this->cidade = $cidade;   
            $this->bairro = $bairro;   
            $this->estado_moradia = $estado_moradia;   
            $this->numero = $numero;   
            $this->cep = $cep;   
        }

        public function toString(): string
        {
            $enderecoCompleto = $this->endereco." ";
            $enderecoCompleto = $this->numero.", ";
            $enderecoCompleto += $this->complemento.". ";
            $enderecoCompleto += $this->bairro.", ";
            $enderecoCompleto += $this->cidade.", ";
            $enderecoCompleto += $this->estado_moradia.". ";
            $enderecoCompleto = $this->cep.", ";


            return $enderecoCompleto;
        }

    }

?>