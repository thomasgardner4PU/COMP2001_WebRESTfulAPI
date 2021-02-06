<?php


class Request
{
    Private $UserId;
    private $FirstName;
    private $LastName;
    private $Email;
    Private $Password;


    public function __construct($UserId, $FirstName, $LastName, $Email, $Password)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->UserId = $UserId;
    }

    public function Userid()
    {
        return $this->UserId;
    }

    public function FirstName()
    {
        return $this->FirstName;
    }

    public function LastName()
    {
        return $this->LastName;
    }

    public function Email()
    {
        return $this->Email;
    }

    public function CurrentPassword()
    {
        return $this ->Password;
    }

}

