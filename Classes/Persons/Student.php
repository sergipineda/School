<?php namespace Com\Iesebre\Dam2\seripineda\Persons;

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{

    use Worker;
    public $classroomGroup;

    public function __construct($dual = null)
    {
        parent::__cosntruct();
        if ($dual != null) {
            $this->dual = $dual;
        }
    }

    public function render(){

       $this-> type = "Estudiant";
        if ($this->dual){
            parent::render() . "i cobra" . $this->salary;
        }else{
            parent::render();
        }
        parent::render();
    }




}