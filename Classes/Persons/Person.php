<?php namespace Com\Iesebre\Dam2\seripineda\Persons;

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 5/10/15
 * Time: 18:13
 */
class Person
{
    public $givenName;
    public $sn1;
    public $sn2;
    public $email;
    public $postalAdress;
    public $postalCode;
    public $state;
    public $country;
    public $type = "persona";

    /**
     * Person constructor.
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $postalAdress
     * @param $postalCode
     * @param $state
     * @param $country
     * @param string $type
     */
    public function __construct($givenName, $sn1, $sn2, $email, $postalAdress, $postalCode, $state, $country, $type)
    {
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->postalAdress = $postalAdress;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     */
    public function getPostalAdress()
    {
        return $this->postalAdress;
    }

    /**
     * @param mixed $postalAdress
     */
    public function setPostalAdress($postalAdress)
    {
        $this->postalAdress = $postalAdress;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function render()
    {

        echo "La {$this->type} té el nom " . $this->getGivenName() ;

    }

}