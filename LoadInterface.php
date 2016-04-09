<?php

interface LoadInterface
{
    public function load();
    public function listEntities();
    public function addEntity($entity);
}