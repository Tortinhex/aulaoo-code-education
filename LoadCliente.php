<?php

class LoadCliente extends LoadEntity
{
    function __construct()
    {
        parent::__construct();
    }

    public function load()
    {
        $lista = [
            [
                "id" => 1,
                "nome" => "João Batista",
                "rg" => "5455454122",
                "cpf" => "454212124",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 2,
                "nome" => "Guilherme Oliveira",
                "rg" => "544754545",
                "cpf" => "65652365665",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 3,
                "nome" => "Paulo Andre",
                "rg" => "22142122475745",
                "cpf" => "5452457545",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 4,
                "nome" => "Andreia Marques",
                "rg" => "5545454545",
                "cpf" => "689898989",
                "sexo" =>"Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 5,
                "nome" => "Danilo Santos",
                "rg" => "754754545454",
                "cpf" => "232145787",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 6,
                "nome" => "Fabio Costa",
                "rg" => "5454545487",
                "cpf" => "231897878",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 7,
                "nome" => "Silvia Santos",
                "rg" => "5421878787",
                "cpf" => "878238686",
                "sexo" =>"Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 8,
                "nome" => "Lucas Andrade",
                "rg" => "5412168989",
                "cpf" => "6898623",
                "sexo" =>"Masculino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 9,
                "nome" => "Amanda Rodrigues",
                "rg" => "54878787",
                "cpf" => "2368654",
                "sexo" =>"Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ],
            [
                "id" => 10,
                "nome" => "Andressa Camargo",
                "rg" => "9989895656",
                "cpf" => "323289898",
                "sexo" =>"Feminino",
                "dtCadastro" => "20/01/2016",
                "status" => "ativo"
            ]
        ];

        foreach ($lista as $item){
            $entity = new Cliente($item);
            $this->addEntity($entity);
        }
    }

}