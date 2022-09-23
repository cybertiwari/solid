<?php
namespace App\Practical\Database;

class MysqlDB {

    protected $table;
    public function table($table)
    {
        $this->$table = $table;
        return $this;
    }
    public function whereBetween($column,$condition)
    {
        return $this;
    }
    public function getOrders()
    {
        return $this;
    }
    public function getTax()
    {
        return $this;
    }
    public function getTotal()
    {
        return '1200.60';
    }
}