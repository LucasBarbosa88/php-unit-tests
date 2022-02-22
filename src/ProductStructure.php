<?php
namespace App;

class ProductStructure
{
    var $prods = [];
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $this->prods = explode('-', $this->products);
        foreach($this->prods as $prod){
            var_dump($prod);
        }
        return $this->prod;
    }
}