<?php

    class Model

    {
        protected $db;

        function __construct() {

            $config = array();

            $config['dbname'] = "vaga";

            $config['host'] = "localhost";

            $config['charset'] = "utf8";

            $config['dbuser'] = "root";

            $config['pass'] = "root";

            try {

                $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'] . ";charset=" . $config['charset'], $config['dbuser'], $config['pass']);

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->db;

            } catch (PDOException $e) {

                echo "Erro: " . $e->getMessage();

                die("<p>Erro tentando conectar-se ao banco!</p>");

            }

        }

    }

?>