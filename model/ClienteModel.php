<?php
    class ClienteModel
    {
        private $nomeMae;

        private $dataNascimento;

        private $logradouro;

        private $cep;

        private $bairro;

        private $estado;

        private $cidade;

        private $numero;

        private $complemento;

        public function getIdCliente()
        {
            return $this->idCliente;
        }

        public function getNomeMae()
        {
            return $this->nomeMae;
        }

        public function getDataNascimento()
        {
            return $this->dataNascimento;
        }

        public function getLogradouro()
        {
            return $this->logradouro;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function getBairro()
        {
            return $this->bairro;
        }

        public function getEstado()
        {
            return $this->estado;
        }


        public function getCidade()
        {
            return $this->cidade;
        }


        public function getNumero()
        {
            return $this->numero;
        }

        public function getComplemento()
        {
            return $this->complemento;
        }

        public function setIdCliente($idCliente)
        {
            $this->nomeMae = $idCliente;
        }

        public function setNomeMae($nomeMae)
        {
            $this->nomeMae = $nomeMae;
        }

        public function setDataNascimento($dataNascimento)
        {
            $this->dataNascimento = $dataNascimento;
        }

        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;
        }

        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function setComplemento($complemento)
        {
            $this->complemento = $complemento;
        }

    }
?>