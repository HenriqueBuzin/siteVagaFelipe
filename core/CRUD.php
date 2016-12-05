<?php
    interface CRUD
    {
        public function editar($obj);
        public function visualizar();
        public function destruir($url);
        public function selecionar($url);
        public function cadastrar($obj);
    }
?>