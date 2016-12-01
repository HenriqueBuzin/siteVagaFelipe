<?php
    class VendaController
    {

        private $vendaDAO;

        private $vendaModel;

        function __construct()
        {

            $this->vendaDAO = new VendaDAO();

            $this->vendaModel = new VendaModel();

        }

        public function editar()
        {

            if ((!empty(filter_input(INPUT_POST, 'idVenda'))) || (!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idVenda = addslashes(filter_input(INPUT_POST, 'idVenda'));

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

                $this->vendaDAO->editar($this->vendaModel);

            }

        }

        public function visualizar()
        {

            $dados = new array();

            $dados = $this->vendaDAO->visualizar();

            return $dados;

        }

        public function destruir()
        {

            if ((!empty(filter_input(INPUT_POST, 'idVenda'))) || (!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idVenda = addslashes(filter_input(INPUT_POST, 'idVenda'));

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

                $this->vendaDAO->destruir($this->vendaModel);

            }

        }

        public function selecionar()
        {

            if ((!empty(filter_input(INPUT_POST, 'idVenda'))) || (!empty(filter_input(INPUT_POST, 'idCliente'))) || (!empty(filter_input(INPUT_POST, 'nome'))) || (!empty(filter_input(INPUT_POST, 'cpf'))) || (!empty(filter_input(INPUT_POST, 'email'))) || (!empty(filter_input(INPUT_POST, 'fone'))) || (!empty(filter_input(INPUT_POST, 'dataHora'))) || (!empty(filter_input(INPUT_POST, 'parcelas'))) || (!empty(filter_input(INPUT_POST, 'valorParcelas'))) || (!empty(filter_input(INPUT_POST, 'valorTotal'))) || (!empty(filter_input(INPUT_POST, 'checkbox')))) {

                $idVenda = addslashes(filter_input(INPUT_POST, 'idVenda'));

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

                $this->vendaDAO->selecionar($this->vendaModel);

            }

        }

    }

?>