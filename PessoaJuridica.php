<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 21:47
 */
class PessoaJuridica extends Cliente implements TipoClienteInterface, ClassificacaoClienteInterface
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

    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
    }

    public function getClassificacao()
    {
        return $this->classificacao;
    }
    
}