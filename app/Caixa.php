<?php
namespace App;

class Caixa
{
    /**
     * @var array
    */

    protected $items = [];
    
    /**
     * Constrói a caixa com os itens recebidos
     * 
     * @param array $items
    */

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * 
     * @param string $items
     * @return bool
    */

     public function contem($item)
    {
        return in_array($item, $this->items);
    }

    /**
    * Remove um item da caixa
    *
    * @return string
    */
    public function pegarUm()
    {
        return array_shift($this->items);
    }

    /**
    * Remove todos os itens que começam com uma determinada letra de dentro da caixa.
    *
    * @param string $letra
    * @return array
    */
    public function comecaCom($letra)
    {
        return array_filter($this->items, function ($item) use ($letra) {
            return stripos($item, $letra) === 0;
        });
    }
}
