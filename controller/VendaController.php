<?php
    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "dao/VendaDAO.php";

    include "model/VendaModel.php";

    class VendaController
    {

        private $vendaDAO;

        private $vendaModel;

        function __construct()
        {

            $this->vendaDAO = new VendaDAO();

            $this->vendaModel = new VendaModel();

        }

        public function editarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nome = addslashes(filter_input(INPUT_POST, 'nome'));

                $cpf = addslashes(filter_input(INPUT_POST, 'cpf'));

                $email = addslashes(filter_input(INPUT_POST, 'email'));

                $fone = addslashes(filter_input(INPUT_POST, 'fone'));

                $dataHora = addslashes(filter_input(INPUT_POST, 'dataHora'));

                $parcelas = addslashes(filter_input(INPUT_POST, 'parcelas'));

                $valorParcelas = addslashes(filter_input(INPUT_POST, 'valorParcelas'));

                $valorTotal = addslashes(filter_input(INPUT_POST, 'valorTotal'));

                $checkbox = addslashes(filter_input(INPUT_POST, 'checkbox'));

                $this->vendaModel->setIdVenda($idVenda);

                $this->vendaModel->setIdCliente($idCliente);

                $this->vendaModel->setNome($nome);

                $this->vendaModel->setCpf($cpf);

                $this->vendaModel->setEmail($email);

                $this->vendaModel->setFone($fone);

                $this->vendaModel->setDataHora($dataHora);

                $this->vendaModel->setParcelas($parcelas);

                $this->vendaModel->setValorParcelas($valorParcelas);

                $this->vendaModel->setValorTotal($valorTotal);

                $this->vendaModel->setCheckbox($checkbox);

                $retorno = $this->vendaDAO->editar($this->vendaModel);

                if ($retorno) {

                    return true;

                } else {

                    return false;

                    die();

                }

                include "view/venda/editar.php";

            }

        }

        public function visualizarAction()
        {

            $vendas = array();

            $vendas = $this->vendaDAO->visualizar();

            // Usar no validar
            foreach($vendas as $key => $venda){

                $venda["dataHora"] = strtotime($venda["dataHora"]);

                $vendas[$key]["dataHora"] = date( 'd-m-Y H:i', $venda["dataHora"]);

            }

            include "view/venda/listar.php";

        }

        public function destruirAction()
        {

            $id = $_GET['id'];

            if (isset($_GET['confirmar'])) {

                $this->clienteDAO->excluir($id);

                header("location: index.php?control=Cliente&acao=listar");

            }

            $dados = $this->clienteDAO->visualizar($id);

            include "view/venda/excluir.php";

        }

        public function selecionarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nome = addslashes(filter_input(INPUT_POST, 'nome'));

                $cpf = addslashes(filter_input(INPUT_POST, 'cpf'));

                $email = addslashes(filter_input(INPUT_POST, 'email'));

                $fone = addslashes(filter_input(INPUT_POST, 'fone'));

                $dataHora = addslashes(filter_input(INPUT_POST, 'dataHora'));

                $parcelas = addslashes(filter_input(INPUT_POST, 'parcelas'));

                $valorParcelas = addslashes(filter_input(INPUT_POST, 'valorParcelas'));

                $valorTotal = addslashes(filter_input(INPUT_POST, 'valorTotal'));

                $checkbox = addslashes(filter_input(INPUT_POST, 'checkbox'));

                $this->vendaModel->setIdVenda($idVenda);

                $this->vendaModel->setIdCliente($idCliente);

                $this->vendaModel->setNome($nome);

                $this->vendaModel->setCpf($cpf);

                $this->vendaModel->setEmail($email);

                $this->vendaModel->setFone($fone);

                $this->vendaModel->setDataHora($dataHora);

                $this->vendaModel->setParcelas($parcelas);

                $this->vendaModel->setValorParcelas($valorParcelas);

                $this->vendaModel->setValorTotal($valorTotal);

                $this->vendaModel->setCheckbox($checkbox);

                $retorno = $this->vendaDAO->selecionar($this->vendaModel);

                if ($retorno) {

                    return true;

                } else {

                    return false;

                    die();

                }

                include "view/venda/selecionar.php";

            }

        }

        public function cadastrarAction()
        {

            if ((!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idCliente = addslashes(filter_input(INPUT_POST, 'idCliente'));

                $nome = addslashes(filter_input(INPUT_POST, 'nome'));

                $cpf = addslashes(filter_input(INPUT_POST, 'cpf'));

                $email = addslashes(filter_input(INPUT_POST, 'email'));

                $fone = addslashes(filter_input(INPUT_POST, 'fone'));

                $dataHora = addslashes(filter_input(INPUT_POST, 'dataHora'));

                $parcelas = addslashes(filter_input(INPUT_POST, 'parcelas'));

                $valorParcelas = addslashes(filter_input(INPUT_POST, 'valorParcelas'));

                $valorTotal = addslashes(filter_input(INPUT_POST, 'valorTotal'));

                $checkbox = addslashes(filter_input(INPUT_POST, 'checkbox'));

                $this->vendaModel->setIdCliente($idCliente);

                $this->vendaModel->setNome($nome);

                $this->vendaModel->setCpf($cpf);

                $this->vendaModel->setEmail($email);

                $this->vendaModel->setFone($fone);

                $this->vendaModel->setDataHora($dataHora);

                $this->vendaModel->setParcelas($parcelas);

                $this->vendaModel->setValorParcelas($valorParcelas);

                $this->vendaModel->setValorTotal($valorTotal);

                $this->vendaModel->setCheckbox($checkbox);

                $retorno = $this->vendaDAO->cadastrar($this->vendaModel);

                if ($retorno) {

                    return true;

                } else {

                    return false;

                    die();
                }

            }

            include "view/venda/cadastrar.php";

        }

    }

?>