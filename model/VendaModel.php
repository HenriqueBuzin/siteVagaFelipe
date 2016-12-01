<?php
    class VendaModel
    {
        private $idVenda;

        private $idCliente;

        private $nome;

        private $cpf;

        private $email;

        private $fone;

        private $dataHora;

        private $parcelas;

        private $valorParcelas;

        private $valorTotal;

        private $checkbox;

        public function getIdVenda()
        {
            return $this->idVenda;
        }

        public function getIdCliente()
        {
            return $this->idCliente;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getFone()
        {
            return $this->fone;
        }

        public function getDataHora()
        {
            return $this->dataHora;
        }

        public function getParcelas()
        {
            return $this->parcelas;
        }

        public function getValorParcelas()
        {
            return $this->valorParcelas;
        }

        public function getValorTotal()
        {
            return $this->valorTotal;
        }

        public function getCheckbox()
        {
            return $this->checkbox;
        }

        public function setIdVenda($idVenda)
        {
            $this->idVenda = $idVenda;
        }

        public function setIdCliente($idCliente)
        {
            $this->idCliente = $idCliente;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setFone($fone)
        {
            $this->fone = $fone;
        }


        public function setParcelas($parcelas)
        {
            $this->parcelas = $parcelas;
        }


        public function setDataHora($dataHora)
        {
            $this->dataHora = $dataHora;
        }

        public function setValorParcelas($valorParcelas)
        {
            $this->valorParcelas = $valorParcelas;
        }


        public function setValorTotal($valorTotal)
        {
            $this->valorTotal = $valorTotal;
        }


        public function setCheckbox($checkbox)
        {
            $this->checkbox = $checkbox;
        }

    }
?>