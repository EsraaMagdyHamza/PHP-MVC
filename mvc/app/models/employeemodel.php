<?php
namespace PHPMVC\Models;
class EmployeeModel extends AbstractModel
{
    public $id;
    public $name;
    public $age;
    public $address;
    public $tax;
    public $salary;

    //public static $db;


    protected static $tableName = 'employees';
    protected static $primaryKey = 'id';
    protected static $tableSchema = array(
        'name'=>self::DATA_TYPE_STR,
        'age'=>self::DATA_TYPE_INT,
        'address'=>self::DATA_TYPE_STR,
        'tax'=>self::DATA_TYPE_DECIMAL,
        'salary'=>self::DATA_TYPE_DECIMAL
    );
    
    
    // public function __construct($name,$age,$address,$tax,$salary)
    // {
    //     //$this->id = $id;
        
    //   //  global $connection;

    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->address = $address;
    //     $this->tax = $tax;
    //     $this->salary = $salary;

    //     //self::$db = $connection;
    // } 

    // public function __get($prop)
    // {
    //     return $this->$prop ;
    // }

    public function getTableName()
    {
        return self::$tableName;
    }

    // public function setName()
    // {

    // }
    // public function calculateSalary()
    // {

    // }
    // public function fireEmployee()
    // {

    // }
    // public function promotemployee()
    // {

    // }
}