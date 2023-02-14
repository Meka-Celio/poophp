<?php 
namespace app\tables;

class Table {

    protected $table;

    public function __construct()
    {
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $classnamePart = end ($parts);
            $this->table = strtolower(str_replace('Table', '', $classnamePart));
        }
        
    }

}

