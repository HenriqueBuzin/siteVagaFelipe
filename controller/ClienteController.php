<?php
    class ClienteController
    {
        private $clienteDAO;
        private $clienteModel;

         function __construct()
        {

            $this->clienteDAO = new ClienteDAO();

            $this->clienteDAO = new ClienteModel();

        }

        public function editar()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nomeMae = addslashes(filter_input(INPUT_POST, 'nomeMae'));

                $dataNascimento = addslashes(filter_input(INPUT_POST, 'dataNascimento'));

                $logradouro = addslashes(filter_input(INPUT_POST, 'logradouro'));

                $cep = addslashes(filter_input(INPUT_POST, 'cep'));

                $bairro = addslashes(filter_input(INPUT_POST, 'bairro'));

                $estado = addslashes(filter_input(INPUT_POST, 'estado'));

                $cidade = addslashes(filter_input(INPUT_POST, 'cidade'));

                $numero = addslashes(filter_input(INPUT_POST, 'numero'));

                $complemento = addslashes(filter_input(INPUT_POST, 'complemento'));

                $this->clienteModel->setIdCliente($idCliente);

                $this->clienteModel->setNomeMae($nomeMae);

                $this->clienteModel->setDataNascimento($dataNascimento);

                $this->clienteModel->setLogradouro($logradouro);

                $this->clienteModel->setCep($cep);

                $this->clienteModel->setBairro($bairro);

                $this->clienteModel->setEstado($estado);

                $this->clienteModel->setCidade($cidade);

                $this->clienteModel->setNumero($numero);

                $this->clienteModel->setComplemento($complemento);

                $this->clienteDAO->editar($this->clienteModel);

            }

        }

        public function visualizar()
        {

            $dados = new array();

            $dados = $this->clienteDAO->visualizar();

            return $dados;

        }

        public function destruir()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nomeMae = addslashes(filter_input(INPUT_POST, 'nomeMae'));

                $dataNascimento = addslashes(filter_input(INPUT_POST, 'dataNascimento'));

                $logradouro = addslashes(filter_input(INPUT_POST, 'logradouro'));

                $cep = addslashes(filter_input(INPUT_POST, 'cep'));

                $bairro = addslashes(filter_input(INPUT_POST, 'bairro'));

                $estado = addslashes(filter_input(INPUT_POST, 'estado'));

                $cidade = addslashes(filter_input(INPUT_POST, 'cidade'));

                $numero = addslashes(filter_input(INPUT_POST, 'numero'));

                $complemento = addslashes(filter_input(INPUT_POST, 'complemento'));

                $this->clienteModel->setIdCliente($idCliente);

                $this->clienteModel->setNomeMae($nomeMae);

                $this->clienteModel->setDataNascimento($dataNascimento);

                $this->clienteModel->setLogradouro($logradouro);

                $this->clienteModel->setCep($cep);

                $this->clienteModel->setBairro($bairro);

                $this->clienteModel->setEstado($estado);

                $this->clienteModel->setCidade($cidade);

                $this->clienteModel->setNumero($numero);

                $this->clienteModel->setComplemento($complemento);

                $this->clienteDAO->destruir($this->clienteModel);

            }

        }

        public function selecionar()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nomeMae = addslashes(filter_input(INPUT_POST, 'nomeMae'));

                $dataNascimento = addslashes(filter_input(INPUT_POST, 'dataNascimento'));

                $logradouro = addslashes(filter_input(INPUT_POST, 'logradouro'));

                $cep = addslashes(filter_input(INPUT_POST, 'cep'));

                $bairro = addslashes(filter_input(INPUT_POST, 'bairro'));

                $estado = addslashes(filter_input(INPUT_POST, 'estado'));

                $cidade = addslashes(filter_input(INPUT_POST, 'cidade'));

                $numero = addslashes(filter_input(INPUT_POST, 'numero'));

                $complemento = addslashes(filter_input(INPUT_POST, 'complemento'));

                $this->clienteModel->setIdCliente($idCliente);

                $this->clienteModel->setNomeMae($nomeMae);

                $this->clienteModel->setDataNascimento($dataNascimento);

                $this->clienteModel->setLogradouro($logradouro);

                $this->clienteModel->setCep($cep);

                $this->clienteModel->setBairro($bairro);

                $this->clienteModel->setEstado($estado);

                $this->clienteModel->setCidade($cidade);

                $this->clienteModel->setNumero($numero);

                $this->clienteModel->setComplemento($complemento);

                $this->clienteDAO->selecionar($this->clienteModel);

            }

        }

    }

?>