<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "core/Model.php";

    include "core/CRUD.php";

    class VendaDAO extends Model implements CRUD

    {

        public function editar($obj) {

            try {

                $sql = "UPDATE venda SET idCliente = :idCliente, nome = :nome, cpf = :cpf, email = :email, fone = :fone, dataHora = :dataHora, parcelas = :parcelas, valorParcelas = :valorParcelas, valorTotal = :valorTotal, checkbox = :checkbox WHERE idVenda = :idVenda";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idVenda", $obj->getIdVenda());

                $sql->bindValue(":idCliente", $obj->getIdCliente());

                $sql->bindValue(":nome", $obj->getNome());

                $sql->bindValue(":cpf", $obj->getCpf());

                $sql->bindValue(":email", $obj->getEmail());

                $sql->bindValue(":fone", $obj->getFone());

                $sql->bindValue(":dataHora", $obj->getDataHora());

                $sql->bindValue(":parcelas", $obj->getParcelas());

                $sql->bindValue(":valorParcelas", $obj->getValorParcelas());

                $sql->bindValue(":valorTotal", $obj->getValorTotal());

                $sql->bindValue(":checkbox", $obj->getCheckbox());

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

        public function visualizar() {

            try {

                $vendas = array();

                $sql = "SELECT c.nomeMae nomeMae, v.idVenda, v.nome, v.cpf, v.email, v.fone, v.dataHora, v.parcelas, v.valorParcelas, v.valorTotal, v.checkbox FROM venda v INNER JOIN cliente c ON c.idCliente = v.idCliente";

                $sql = $this->db->prepare($sql);

                $sql->execute();

                if ($sql->rowCount() > 0) {

                    $vendas = $sql->fetchAll(PDO::FETCH_ASSOC);

                }

                return $vendas;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

        public function destruir($url) {

            try {

                $sql = "DELETE FROM venda WHERE idVenda = :idVenda";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idVenda", $url);

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

        public function selecionar($url) {

            try {

                $vendas = array();

                $sql = "SELECT * FROM venda WHERE idVenda = :idVenda";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idVenda", $url);

                $sql->execute();

                if ($sql->rowCount() > 0) {

                    $vendas = $sql->fetchAll();

                }

                return $vendas;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

        public function cadastrar($obj) {

            try {

                $sql = "INSERT INTO venda (nome,descricao,imagem) VALUES (:nome, :descricao, :imagem)";

                $sql = $this->db->prepare($sql);

                foreach ($array as $valor => $campo) {

                    $sql->bindValue(":" . $valor, $campo);

                }

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

    }

?>