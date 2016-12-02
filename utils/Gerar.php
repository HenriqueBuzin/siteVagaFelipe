<?php
    class Gerar
    {
        public static function nome()
        {
            $tamanho = mt_rand(8, 45);
            $all_str = "abcdefghijlkmnopqrstuvxyzw";
            $nome = "";
            for ($i = 0;$i <= $tamanho;$i++){
                $nome .= $all_str[mt_rand(0,25)];
            }
            return $nome;
        }
        public static function dataNascimento()
        {
            $dataNascimento= mt_rand(1262055681,1262055681);
            $dataNascimento = date("Y-m-d H:i:s", $dataNascimento);
            return $dataNascimento;
        }

        public static function dataHora()
        {
            $dataHora = mt_rand(1262055681,1262055681);
            $dataHora = date("Y-m-d H:i:s", $dataHora);
            return $dataHora;
        }
        public static function logradouro()
        {
            $tamanho = mt_rand(8, 45);
            $all_str = "abcdefghijlkmnopqrstuvxyzw";
            $logradouro = "";
            for ($i = 0;$i <= $tamanho;$i++){
                $logradouro .= $all_str[mt_rand(0,25)];
            }
            return $logradouro;
        }
        public static function cep()
        {


        }
        public static function bairro()
        {


        }
        public static function estado()
        {


        }
        public static function cidade()
        {


        }
        public static function numero()
        {


        }
        public static function complemento()
        {


        }
        public static function cpf()
        {


        }
        public static function email()
        {


        }
        public static function parcelas()
        {


        }
        public static function valorParcelas()
        {


        }
        public static function valorTotal()
        {


        }
        public static function checkbox()
        {

            $checkbox = mt_rand(0, 1);

            return $checkbox;

        }
    }
?>