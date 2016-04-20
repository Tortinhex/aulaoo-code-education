<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 22:43
 */
class LoadPessoaJuridica extends LoadEntity
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
                "nome" => "Fabio Costa",
                "rg" => "5454545487",
                "cnpj" => "231897878",
                "sexo" => "Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 2,
                "endereco" => $loadEndereco->findOneBy("id", 6),
            ],
            [
                "id" => 2,
                "nome" => "Silvia Santos",
                "rg" => "5421878787",
                "cnpj" => "878238686",
                "sexo" => "Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 3,
                "endereco" => $loadEndereco->findOneBy("id", 7),
            ],
            [
                "id" => 3,
                "nome" => "Lucas Andrade",
                "rg" => "5412168989",
                "cnpj" => "6898623",
                "sexo" => "Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 5,
                "endereco" => $loadEndereco->findOneBy("id", 8),
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 8),
            ],
            [
                "id" => 4,
                "nome" => "Amanda Rodrigues",
                "rg" => "54878787",
                "cnpj" => "2368654",
                "sexo" => "Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 4,
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 9),
                "endereco" => $loadEndereco->findOneBy("id", 9),
            ],
            [
                "id" => 5,
                "nome" => "Andressa Camargo",
                "rg" => "9989895656",
                "cnpj" => "323289898",
                "sexo" => "Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo",
                "classificacao" => 4,
                "enderecoCobranca" => $loadEndereco->findOneBy("id", 10),
            ]
        ];

        foreach ($lista as $item) {
            $entity = new PessoaJuridica($item);
            $this->addEntity($entity);
        }
    }
}