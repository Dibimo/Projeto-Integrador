<?php
    require_once 'Endereco.php';
    class Paciente
    {
        //dados pessoais
        private string $nome;
        private string $data_nascimento;
        private string $sexo;
        private string $escolaridade;
        private string $profissao;
        private string $rg;
        private string $estado_civil;
        private string $naturalidade;
        private string $nomeMae;
        private string $nomePai;
        private int $contato;
        private int $cpf;

        //dados fisicos
        private float $peso;
        private float $altura;
        private string $cor;
        //endereco completo
        private Endereco $endereco;

        public function __construct($dados)
        {
            //dados pessoais
            $this->nome = $dados['dadosPessoais']['nome'];
            $this->data_nascimento = $dados['dadosPessoais']['data_nascimento'];
            $this->sexo = $dados['dadosPessoais']['sexo'];
            $this->escolaridade = $dados['dadosPessoais']['escolaridade'];
            $this->profissao = $dados['dadosPessoais']['profissao'];
            $this->rg = $dados['dadosPessoais']['rg'];
            $this->estado_civil = $dados['dadosPessoais']['estado_civil'];
            $this->naturalidade = $dados['dadosPessoais']['naturalidade'];
            $this->nomeMae = $dados['dadosPessoais']['mae'];
            $this->nomePai = $dados['dadosPessoais']['pai'];
            $this->cpf = $dados['dadosPessoais']['cpf'];

            //dados fisicos
            $this->peso = $dados['dadosFisicos']['peso'];
            $this->altura = $dados['dadosFisicos']['altura'];
            $this->cor = $dados['dadosFisicos']['cor'];

            //endereço
            $this->endereco = new Endereco(
                $dados['enderecoCompleto']['endereco'],
                $dados['enderecoCompleto']['complemento'],
                $dados['enderecoCompleto']['cidade'],
                $dados['enderecoCompleto']['bairro'],
                $dados['enderecoCompleto']['estado_moradia'],
                $dados['enderecoCompleto']['numero'],
                $dados['enderecoCompleto']['cep']
            );
        }

        public function teste(): void
        {
            echo ($this->endereco->toString());
        }

    }



?>