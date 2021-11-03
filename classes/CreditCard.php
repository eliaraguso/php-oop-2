<?php

class CreditCard{
    private $numero;
    private $titolare;
    private $cvv;
    private $data_scadenza;

    function __construct($_numero, $_titolare, $_cvv, $_data_scadenza)
    {
        $this->numero = $_numero;
        $this->titolare = $_titolare;
        $this->cvv = $_cvv;
        $this->data_scadenza = $_data_scadenza;
    }
}

?>