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

    /**
     * Retorna a lista de entidades
     * OBS: Se houver valor no parametro $order, a lista
     * será ordenada baseada no ID
     *
     * @param string $order
     * @return array
     */
    public function listEntities($order = "")
    {
        $lista = $this->list;

        if (!empty($order)) {
            if ("asc" == $order) {
                ksort($lista);
                return $lista;
            } else {
                krsort($lista);
            }
        }

        return $lista;
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