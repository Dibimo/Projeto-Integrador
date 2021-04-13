<?php
    require_once 'Endereco.php';
    require_once 'Anamnese.php';
    require_once 'Procedimento.php';
    class Paciente
    {
        //dados pessoais
        private string $nome;
        private string $data_nascimento;
        private string $sexo;
        private string $escolaridade;
        private string $profissao;
        private string $estado_nascenca;
        private string $rg;
        private string $estado_civil;
        private string $naturalidade;
        private string $nomePai;
        private string $nomeMae;
        private string $naturalidadePai;
        private string $naturalidadeMae;
        private string $contato;
        private string $cpf;

        //dados fisicos
        private float $peso;
        private float $altura;
        private string $cor;
        //endereco completo
        private Endereco $endereco;

        private Anamnese $anamnese;


        public function __construct($dados)
        {
            //dados pessoais
            $this->nome = $dados['dadosPessoais']['nome'];
            $this->data_nascimento = $dados['dadosPessoais']['data_nascimento'];
            $this->sexo = $dados['dadosPessoais']['sexo'];
            $this->estado_nascenca = $dados['dadosPessoais']['estado_nascenca'];
            $this->escolaridade = $dados['dadosPessoais']['escolaridade'];
            $this->contato = $dados['dadosPessoais']['contato'];
            $this->profissao = $dados['dadosPessoais']['profissao'];
            $this->rg = $dados['dadosPessoais']['rg'];
            $this->estado_civil = $dados['dadosPessoais']['estado_civil'];
            $this->naturalidade = $dados['dadosPessoais']['naturalidade'];
            $this->nomePai = $dados['dadosPessoais']['pai'];
            $this->nomeMae = $dados['dadosPessoais']['mae'];
            $this->naturalidadePai = $dados['dadosPessoais']['naturalidadePai'];
            $this->naturalidadeMae = $dados['dadosPessoais']['naturalidadeMae'];
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


        public function getNome(): string
        {
            return $this->nome;
        }

        public function getData_nascimento()
        {
            return $this->data_nascimento;
        }
 
        public function getCpf(): string
        {
            return $this->cpf;
        }

        public function getSexo(): string
        {
            return $this->sexo;
        }

        public function getEscolaridade(): string
        {
            return $this->escolaridade;
        }
 
        public function getProfissao(): string
        {
            return $this->profissao;
        }
 
        public function getRg(): string
        {
            return $this->rg;
        }
 
        public function getEstado_civil(): string
        {
            return $this->estado_civil;
        }
 
        public function getNaturalidade(): string
        {
            return $this->naturalidade;
        }

        public function getNomeMae(): string
        {
            return $this->nomeMae;
        }

        public function getNomePai(): string
        {
            return $this->nomePai;
        }
 
        public function getContato(): string
        {
            return $this->contato;
        }

        public function getPeso(): float
        {
            return $this->peso;
        }
 
        public function getAltura(): float
        {
            return $this->altura;
        }
 
        public function getCor(): string
        {
            return $this->cor;
        }

        public function getEndereco(): Endereco
        {
            return $this->endereco;
        }

        public function getNaturalidadeMae(): string
        {
                return $this->naturalidadeMae;
        }
 
        public function getNaturalidadePai(): string
        {
                return $this->naturalidadePai;
        }

        public function getAnamnese(): Anamnese
        {
            return $this->anamnese;
        }

        public function setAnamnese($dados)
        {
            $this->anamnese = new Anamnese($dados);

        }

        public function getEstado_nascenca()
        {
            return $this->estado_nascenca;
        }
    }



?>