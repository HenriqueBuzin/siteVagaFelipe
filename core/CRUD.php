<?php
    interface CRUD
    {
        public function editar(Object $obj);
        public function visualizar();
        public function destruir(Object $obj);
        public function selecionar(Object $obj);
    }
?>