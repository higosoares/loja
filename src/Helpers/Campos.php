<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/09/2018
 * Time: 22:34
 */

namespace App\Helpers;


class Campos
{
    /**
     * Retira a mascara de CPF
     */
    public function removeMascaraCPF($cpf){
        return preg_replace("/\D+/", "", $cpf);
    }

}