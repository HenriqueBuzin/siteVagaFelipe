<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    include "util/Gerar.php";
    function botaoCadastrar() {
        /*for($i = 1; $i <= 2500; $i++) {
            $_POST["nomeMae"] = Gerar::nome();
            $_POST["dataNascimento"] = Gerar::dataNascimento();
            $_POST["logradouro"] = Gerar::logradouro();
            $_POST["cep"] = Gerar::cep();
            $_POST["bairro"] = Gerar::bairro();
            $_POST["estado"] = Gerar::estado();
            $_POST["cidade"] = Gerar::cidade();
            $_POST["numero"] = Gerar::numero();
            $_POST["complemento"] = Gerar::complemento();
            header("Location: ");
        }*/
        return "index.php?controller=cliente&action=cadastrar";
    }
?>