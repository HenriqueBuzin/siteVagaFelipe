<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    // Usar no cadastrar
    include "util/Gerar.php";
    function botaoCadastrar() {
        /*for($i = 1; $i <= 2500; $i++){
            $_POST["idCliente"] = Gerar::idCliente();
            $_POST["nome"] = Gerar::nome();
            $_POST["cpf"] = Gerar::cpf();
            $_POST["email"] = Gerar::email();
            $_POST["fone"] = Gerar::fone();
            $_POST["dataHora"] = Gerar::dataHora();
            $_POST["parcelas"] = Gerar::parcelas();
            $_POST["valorParcelas"] = Gerar::valorParcelas();
            $_POST["valorTotal"] = Gerar::valorTotal();
            $_POST["checkbox"] = Gerar::checkbox();
            header("Location: ");
        }*/
        return "?controller=venda&action=cadastrar";
    }
?>