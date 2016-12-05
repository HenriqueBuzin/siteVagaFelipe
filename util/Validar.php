<?php
class Validar
{
    public static function dateTime($dateTime)
    {

            $dateTime = strtotime($dateTime );

            $dateTime  = date( 'd/m/Y  - H:i', $dateTime );

            return $dateTime;

    }

    public static function date($date)
    {

        $date = strtotime($date);

        $date  = date( 'd/m/Y', $date);

        return $date;

    }
    public static function cep($cep)
    {

        $cepInicio = substr($cep, 0, 5);

        $cepFim = substr($cep, 5, 7);

        $cep = $cepInicio . "-" . $cepFim;

        return $cep;

    }

    public static function cpf($cpf)
    {

        $cpf1 = substr($cpf, 0, 3);

        $cpf2 = substr($cpf, 3, 3);

        $cpf3 = substr($cpf, 6, 3);

        $cpf4 = substr($cpf, 9, 2);

        $cpf = $cpf1 . "." . $cpf2 . "." . $cpf3 . "-" . $cpf4;

        return $cpf;

    }

    public static function checkbox($checkbox){

        $checkbox = ($checkbox) ? "checked" : "";

        return $checkbox;

    }

    public static function dinheiro($dinheiro)
    {

        $dinheiro = number_format($dinheiro, 2, ",", "");

        return $dinheiro;

    }

    public static function fone($fone)
    {
        $tamanho = strlen($fone);

        $dd = substr($fone, 0, 2);

        if($tamanho == 10){

            $foneInicio = substr($fone, 2, 4);

            $foneFim = substr($fone, 6, 4);

        }else if($tamanho == 11){

            $foneInicio = substr($fone, 2, 5);

            $foneFim = substr($fone, 7, 4);

        }

        $fone = "(" . $dd . ") " . $foneInicio . "-" . $foneFim;

        return $fone;

    }

}