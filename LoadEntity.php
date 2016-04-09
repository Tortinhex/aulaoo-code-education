<?php

class LoadEntity implements LoadInterface
{

    protected $list;

    function __construct()
    {
        $this->list = array();
        $this->load();
    }

    public function addEntity($entity)
    {
        $this->list[] = $entity;
    }

    public function load()
    {
        // TODO: Implement load() method.
    }

    public function listEntities()
    {
        return $this->list;
    }

    public function findOneBy($key, $value)
    {
        if (empty($this->listEntities())) {
            return null;
        }

        foreach ($this->listEntities() as $item) {
            $nomeFuncao = "get" . ucfirst($key);
            if (method_exists($item, $nomeFuncao) and null !== $value) {
                $resul = $item->{$nomeFuncao}();
                if ($value == $resul) {
                    return $item;
                }
            }
        }
    }
}