<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 22:33
 */
class LoadPessoaFisica extends LoadEntity
{
    function __construct()
    {
        parent::__construct();
    }

    public function load()
    {

        $loadEndereco = new LoadEndereco();

        $lista = [
            [
                "id" => 1,
                "nome" => "João Batista",
                "rg" => "5455454122",
                "cpf" => "454212124",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 5,
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 1),
                "endereco" => $loadEndereco->findOneBy("id", 1),
            ],
            [
                "id" => 2,
                "nome" => "Guilherme Oliveira",
                "rg" => "544754545",
                "cpf" => "65652365665",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 4,
                "endereco" => $loadEndereco->findOneBy("id", 2),
            ],
            [
                "id" => 3,
                "nome" => "Paulo Andre",
                "rg" => "22142122475745",
                "cpf" => "5452457545",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 4,
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 3),
                "endereco" => $loadEndereco->findOneBy("id", 3),
            ],
            [
                "id" => 4,
                "nome" => "Andreia Marques",
                "rg" => "5545454545",
                "cpf" => "689898989",
                "sexo" =>"Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 5,
                "endereco" => $loadEndereco->findOneBy("id", 4),
            ],
            [
                "id" => 5,
                "nome" => "Danilo Santos",
                "rg" => "754754545454",
                "cpf" => "232145787",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 3,
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 5),
            ],
        ];


        foreach ($lista as $item){
            $entity = new PessoaFisica($item);
            $this->addEntity($entity);
        }
    }
}