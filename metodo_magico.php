<?php

class MagicSQL
{
    protected $sql;
    
    public function insert()
    {
        echo 'chamou insert';
    }
    
    public function __call($name, $arguments) 
    {
        $this->sql .= ' ' . strtoupper($name);
        if (count($arguments)) {
            $this->sql .= ' ' . $arguments[0];
        }
        return $this;
    }
    
    public function getSQL()
    {
        return $this->sql;
    }
    
    public static function __callStatic($name, $arguments) 
    {
        return $name . ' ' . implode(', ', $arguments);
    }
}

$sql = new MagicSQL;

// Domain Specific Language
echo $sql->select('*')
        ->from('usuarios')
        ->order('BY nome')
        ->desc()
        ->limit('30')
        ->getSQL();

//echo MagicSQL::add(1, 2, 3);