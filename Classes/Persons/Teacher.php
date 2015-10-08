<?php namespace Com\Iesebre\Dam2\seripineda\Persons;

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{

   use Worker;

   public $specialization;

    public function render()
    {
        $this->type = "Professor";
        /*
         * fa referencia a una classe pare
         */
        parent::render();


    }



}