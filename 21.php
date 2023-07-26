<?php 
class employee{
    public $name;
    public $age;
    public $gender;
    public function __construct($name="", $age=25, $gender="male")
    {
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function __sleep()
    {
        echo "__sleep()";
        return array ('name','age');
    }
    public function __wakeup()
    {
        echo"__wakeup";
        $this->gender="male";
    }
}
$obj1=new employee();
echo "__sleep()";
$ser=serialize($obj1);
echo".$ser";
var_dump(unserialize($ser));
?>