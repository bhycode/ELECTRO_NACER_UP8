<?php


class Admin {

    private $id;
    private $username;
    private $email;
    private $pass;


    public function __constructor($id, $username, $email, $pass) {
        $this->id = $id;
        $this->username = $id;
        $this->email = $email;
        $this->pass = $pass;
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

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    
}


?>