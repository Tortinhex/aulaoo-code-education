<?php

/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 14/04/16
 * Time: 22:45
 */
class LoadEndereco extends LoadEntity
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
                "logradouro" => "Rua Tucano",
                "numero" => "125",
                "complemento" => "",
                "bairro" => "Bela Vista",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 2,
                "logradouro" => "Rua Anu",
                "numero" => "185",
                "complemento" => "",
                "bairro" => "Perus",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 3,
                "logradouro" => "Rua Canário",
                "numero" => "856",
                "complemento" => "",
                "bairro" => "Pirituba",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 4,
                "logradouro" => "Rua Andomeda",
                "numero" => "52",
                "complemento" => "",
                "bairro" => "Serpa",
                "cidade" => "Caieiras",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 5,
                "logradouro" => "Rua Andomeda",
                "numero" => "52",
                "complemento" => "",
                "bairro" => "Serpa",
                "cidade" => "Caieiras",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 6,
                "logradouro" => "Rua Mercurio",
                "numero" => "563",
                "complemento" => "",
                "bairro" => "Taipas",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 7,
                "logradouro" => "Rua Venus",
                "numero" => "25",
                "complemento" => "",
                "bairro" => "Lapa",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 8,
                "logradouro" => "Rua Urano",
                "numero" => "85",
                "complemento" => "",
                "bairro" => "Barra Funda",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 9,
                "logradouro" => "Rua Netuno",
                "numero" => "85",
                "complemento" => "",
                "bairro" => "Perdizes",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
            [
                "id" => 10,
                "logradouro" => "Rua Plutão",
                "numero" => "56",
                "complemento" => "",
                "bairro" => "Vila Ema",
                "cidade" => "São Paulo",
                "estado" =>"São Paulo",
                "pais" => "Brasil",
            ],
        ];

        foreach ($lista as $item){
            $entity = new Endereco($item);
            $this->addEntity($entity);
        }
    }
}