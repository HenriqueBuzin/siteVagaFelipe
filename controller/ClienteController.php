<?php
    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "dao/ClienteDAO.php";

    include "model/ClienteModel.php";

    class ClienteController
    {

        private $clienteDAO;

        private $clienteModel;

        function __construct()
        {

            $this->clienteDAO = new ClienteDAO();

            $this->clienteModel = new ClienteModel();

        }

        public function editarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

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

                $retorno = $this->clienteDAO->editar($this->clienteModel);

                if ($retorno) {

                    return true;
                    header("Location: /view/cliente/cliente.php");

                } else {

                    return false;

                    die();

                }

                include "view/cliente/editar.php";

            }

        }

        public function visualizarAction()
        {

            $clientes = array();

            $clientes = $this->clienteDAO->visualizar();

            include "view/cliente/listar.php";

        }

        public function destruirAction()
        {

            if ((!empty(filter_input(INPUT_GET, 'idCliente')))){

                $idCliente = addslashes(filter_input(INPUT_GET, 'idCliente'));

                $retorno = $this->clienteDAO->destruir($idCliente);

            }

            include "view/cliente/excluir.php";

        }

        public function selecionarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

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

                $retorno = $this->clienteDAO->selecionar($this->clienteModel);

                $retorno = $this->advogadoDAO->selecionar($url);

                if ($retorno) {

                    return $retorno;

                } else {

                    return false;

                    die();

                }

                include "view/cliente/pesquisar.php";

            }

        }

        public function cadastrarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'nomeMae')))  || (!empty(filter_input(INPUT_POST, 'dataNascimento'))) || (!empty(filter_input(INPUT_POST, 'logradouro'))) || (!empty(filter_input(INPUT_POST, 'cep'))) || (!empty(filter_input(INPUT_POST, 'bairro'))) || (!empty(filter_input(INPUT_POST, 'estado'))) || (!empty(filter_input(INPUT_POST, 'cidade'))) || (!empty(filter_input(INPUT_POST, 'numero'))) || (!empty(filter_input(INPUT_POST, 'complemento'))))
            {

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

                $retorno = $this->clienteDAO->cadastrar($this->clienteModel);

                if ($retorno) {

                    //header("location: ");

                } else {
                    echo "Erro";

                }

            }

            include "view/cliente/cadastrar.php";

        }

    }

?>