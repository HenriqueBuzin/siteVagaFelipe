<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    include "core/Model.php";
    include "core/CRUD.php";
    class VendaDAO extends Model implements CRUD
    {
        public function editar($array = array()) {
            try {
                $sql = "UPDATE venda SET rua = :rua, cidade = :cidade, complemento = :complemento, telefone = :telefone WHERE idVenda = :idVenda";
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

            try {
                $array = array();
                $sql = "SELECT * FROM venda";
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
        }
        public function destruir($url) {
            try {
                $sql = "DELETE FROM venda WHERE idVenda = :id";
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
                $sql = "SELECT * FROM venda WHERE idVenda = {$url}";
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