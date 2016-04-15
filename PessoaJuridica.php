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
    private $cnpj;

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

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    
}