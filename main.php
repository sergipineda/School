<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . 'vendor/autoload.php';

use Com\Iesebre\Dam2\seripineda\Persons\Person;

include "/home/sergi/Code/School/Classes/Persons/Person.php";

$person = new Person();
$person->type = "PEPITA";
$person->setGivenName("PEPITA PALOTES");

$person->render();