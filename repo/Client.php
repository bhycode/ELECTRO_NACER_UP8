<?php

class Client {

    private $id;
    private $fullname;
    private $username;
    private $email;
    private $phonenumber;
    private $adresse;
    private $city;
    private $passw;
    private $valide;

    public function __construct($id, $fullname, $username, $email, $phonenumber, $adresse, $city, $passw, $valide) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
        $this->adresse = $adresse;
        $this->city = $city;
        $this->passw = $passw;
        $this->valide = $valide;
    }


    


    // Setters and Getters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFullname()
    {
        return $this->fullname;
    }

    public function setFullname($fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    public function setPhonenumber($phonenumber): self
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPassw()
    {
        return $this->passw;
    }

    public function setPassw($passw): self
    {
        $this->passw = $passw;

        return $this;
    }

    public function getValide()
    {
        return $this->valide;
    }

    public function setValide($valide): self
    {
        $this->valide = $valide;

        return $this;
    }


}


?>