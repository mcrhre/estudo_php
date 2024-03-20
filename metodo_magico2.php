<?php

class MagicList
{
    protected $parameters = [];
    
    public function __set($name, $value) 
    {
        $this->parameters[$name] = $value;
    }
    
    public function __get($name) 
    {
        return $this->parameters[$name];
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
}

$list = new MagicList;

$list->nome = 'Leonardo';
$list->email = 'leo@teste.com';

echo $list->nome;

var_dump($list);