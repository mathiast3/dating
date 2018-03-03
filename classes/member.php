<?php
/**
 * User: Mathias
 * Date: 2/15/2018
 * Time: 2:05 PM
 */

class Member
{
    //create variables to store profile info
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;
    protected $_isPremium;

    /**
     * @return bool
     */
    //returns true if the account is premium
    public function isPremium()
    {
        return $this->_isPremium;
    }

    /**
     * @param bool $isPremium
     */
    //sets isPremium
    public function setIsPremium($isPremium)
    {
        $this->_isPremium = $isPremium;
    }

    /**
     * member constructor.
     */
    //constructor
    public function __construct($_fname,$_lname,$_age,$_gender,$_phone)
    {
        $this->_fname=$_fname;
        $this->_lname=$_lname;
        $this->_age=$_age;
        $this->_gender=$_gender;
        $this->_phone=$_phone;

        $this->_isPremium=false;
    }

    /**
     * @return mixed
     */
    //gets Fname
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    //checks that age is a realistic number(<120) and bigger than 18
    public function setAge($age)
    {
        if($age>=18 && age<120)
            $this->_age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    //checks that the phone number is 10 digits
    public function setPhone($phone)
    {
        if(strlen($phone)==10)
            $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {

        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * @param mixed $seeking
     */
    //checks that the choice is male or female
    public function setSeeking($seeking)
    {
        if($seeking=="male" || $seeking="female")
            $this->_seeking = $seeking;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }



}