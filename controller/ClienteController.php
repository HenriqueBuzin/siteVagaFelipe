<?php
    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "model/ClienteModel.php";

    include "dao/ClienteDAO.php";

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

            $cliente = array();

            $cliente = $this->clienteDAO->visualizar();

            include "view/cliente/listar.php";

        }

        public function destruirAction()
        {

            $id = $_GET['id'];

            if (isset($_GET['confirmar'])) {

                $this->clienteDAO->excluir($id);

                header("location: index.php?control=Cliente&acao=listar");

            }

            $dados = $this->clienteDAO->visualizar($id);

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

                    header("location: ");

                } else {
                    echo "Erro";

                }

            }

            include "view/cliente/cadastrar.php";

        }

    }

?>