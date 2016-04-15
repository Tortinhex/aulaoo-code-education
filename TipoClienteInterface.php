<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 21:47
 */
interface TipoClienteInterface
{
    public function setEnderecoCobranca(Endereco $endereco);
    public function getEnderecoCobranca();
}