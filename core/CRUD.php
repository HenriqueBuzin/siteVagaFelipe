<?php
    interface CRUD
    {
        public function editar($array);
        public function visualizar();
        public function destruir($url);
        public function selecionar($url);
        public function cadastrar($obj);
    }
?>