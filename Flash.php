<?php

class Flash
{
    protected $flashName;
    protected $flashMessage;

    //Подготовить флеш-сообщение:
    public function setFlashMessage($name, $message)
    {
       $this->flashName = $name;
       $this->flashMessage = $message;
        $_SESSION[$this->flashName] = $this->flashMessage;
    }

    //Вывести флеш-сообщение:
    public function displayFlashMessage($name)
    {
        $this->flashName = $name;
        echo $_SESSION[$this->flashName];
        unset($_SESSION[$this->flashName]);
    }
}
