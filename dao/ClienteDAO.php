<?php
    class ClienteDAO extends Model implements CRUD
    {
        public function editar($array = array()) {

            try {

                $sql = "UPDATE endereco SET rua = :rua, cidade = :cidade, complemento = :complemento, telefone = :telefone WHERE idVenda = :idVenda";

                $sql = $this->db->prepare($sql);

                foreach ($array as $valor => $campo){

                    $sql->bindValue(":" . $valor, $campo);

                }

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

                $sql = "DELETE FROM vaga WHERE idCliente = :id";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":id", $url);

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

                $sql = "SELECT * FROM venda WHERE idCliente = {$url}";

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
        public function cadastrar(Cliente $obj) {

            try {

                $sql = "INSERT INTO doce (nome,descricao,imagem) VALUES (:nome, :descricao, :imagem)";

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