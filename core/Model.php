<?php

    class Model

    {
        private $config = array();

        protected $db;

        function __construct() {

            $this->$config['dbname'] = "vaga";

            $this->$config['host'] = "localhost";

            $this->$config['charset'] = "utf8";

            $this->$config['dbuser'] = "root";

            $this->$config['pass'] = "root";

            try {

                $this->db = new PDO("mysql:dbname=" . $this->$config['dbname'] . ";host=" . $this->$config['host'] . ";charset=" . $this->$config['charset'], $this->$config['dbuser'], $this->$config['pass']);

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->db;

            } catch (PDOException $e) {

                echo "Erro: " . $e->getMessage();

                die("<p>Erro tentando conectar-se ao banco!</p>");

            }

        }

    }

?>