<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    include "core/CRUD.php";

    include "core/Model.php";

    class ClienteDAO extends Model implements CRUD

    {
        public function editar($obj) {

            try {

                $sql = "UPDATE endereco SET nomeMae = :nomeMae, dataNascimento = :dataNascimento, logradouro = :logradouro, cep = :cep, bairro = :bairro, estado = :estado, cidade = :cidade, numero = :numero, complemento = :complemento WHERE idCliente = :idCliente";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idCliente", $obj->getIdCliente());

                $sql->bindValue(":nomeMae", $obj->getNomeMae());

                $sql->bindValue(":dataNascimento", $obj->getDataNascimento());

                $sql->bindValue(":logradouro", $obj->getLogradouro());

                $sql->bindValue(":cep", $obj->getCep());

                $sql->bindValue(":bairro", $obj->getBairro());

                $sql->bindValue(":estado", $obj->getEstado());

                $sql->bindValue(":cidade", $obj->getCidade());

                $sql->bindValue(":numero", $obj->getNumero());

                $sql->bindValue(":complemento", $obj->getComplemento());

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }
        public function visualizar() {

            $array = array();

            try {

                $sql = "SELECT * FROM cliente";

                $sql = $this->db->prepare($sql);

                $sql->execute();

                if ($sql->rowCount() > 0) {

                    $array = $sql->fetchAll();

                }

                return $array;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

            return $array;

        }
        public function destruir($url) {

            try {

                $sql = "DELETE FROM cliente WHERE idCliente = :idCliente";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idCliente", $url);

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }
        public function selecionar($url) {

            $array = array();

            try {

                $sql = "SELECT * FROM cliente WHERE idCliente = :idCliente";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":idCliente", $url);

                $sql->execute();

                if ($sql->rowCount() > 0) {

                    $array = $sql->fetchAll();

                }

                return $array;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

            return $array;

        }
        public function cadastrar($obj) {

            try {

                $sql = "INSERT INTO cliente (nomeMae, dataNascimento, logradouro, cep, bairro, estado, cidade, numero, complemento) VALUES (:nomeMae, :dataNascimento, :logradouro, :cep, :bairro, :estado, :cidade, :numero, :complemento)";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":nomeMae", $obj->getNomeMae());

                $sql->bindValue(":dataNascimento", $obj->getDataNascimento());

                $sql->bindValue(":logradouro", $obj->getLogradouro());

                $sql->bindValue(":cep", $obj->getCep());

                $sql->bindValue(":bairro", $obj->getBairro());

                $sql->bindValue(":estado", $obj->getEstado());

                $sql->bindValue(":cidade", $obj->getCidade());

                $sql->bindValue(":numero", $obj->getNumero());

                $sql->bindValue(":complemento", $obj->getComplemento());

                $sql->execute();

                return true;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }
    }
?>