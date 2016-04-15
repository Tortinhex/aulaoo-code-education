<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 21:46
 */
class PessoaFisica extends Cliente implements TipoClienteInterface
{
    private $enderecoCobranca;

    public function __construct($data)
    {
        parent::__construct($data);
    }

    public function setEnderecoCobranca(Endereco $endereco)
    {
        $this->enderecoCobranca = $endereco;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

}