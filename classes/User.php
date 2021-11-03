<?php

class User {
    private $nome;
    private $cognome;
    private $eta;
    private $email;
    private $carta_credito;

    
    function __construct($_nome, $_cognome, $_eta, $_email)
    {
        $this->nome = $_nome;
        $this->lastname = $_cognome;
        $this->age = $_eta;
        $this->email = $_email;
    }
    
    public function setCreditCard($_credito){
        $this->carta_credito = $_credito;
    }
}


?>