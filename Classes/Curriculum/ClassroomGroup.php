<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 5/10/15
 * Time: 20:09
 */

namespace Com\Iesebre\Dam2\seripineda\Curriculum;

use Com\Iesebre\Dam2\seripineda\Persons\Student;

class ClassroomGroup
{

    public $students = array();

    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @return array
     */

    public function addStudent(Student $student){
        array_push($this->students,$student);
    }


    /**
     * @return array
     */

    /**
     * @param array $students
     */
    public function getStudents()
    {
        return $this->students;
    }

    public function setStudents($students)
    {
        $this->students = $students;
    }
}