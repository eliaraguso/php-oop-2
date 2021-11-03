<?php

class Product {
    private $categoria;
    private $marca;
    private $nome;
    private $prezzo;

    function __construct($_categoria, $_marca, $_nome, $_prezzo)
    {
        $this->categoria = $_categoria;
        $this->marca = $_marca;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPrezzo()
    {
        return $this->prezzo;
    }
    
}


?>