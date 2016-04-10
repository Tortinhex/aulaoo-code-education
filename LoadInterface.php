<?php

interface LoadInterface
{
    public function load();
    public function listEntities($order);
    public function addEntity($entity);
}