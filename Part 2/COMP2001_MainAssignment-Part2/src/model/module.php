<?php

class Module
{
    private $code;
    private $title;
    private $id;


    public function __construct($code, $title, $id)
    {
        $this->code = $code;
        $this->title = $title;
        $this->id = $id;
    }

    public function Code()
    {
        return $this->code;
    }

    public function Title()
    {
        return $this->id;
    }

    public function Id()
    {
        return $this->id;
    }
}