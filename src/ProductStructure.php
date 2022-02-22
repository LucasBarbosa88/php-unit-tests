<?php
namespace App;

class ProductStructure
{
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
        $results = [];
        foreach($this->products as $key => $product){
            $this->products[$key] = explode('-', $product);
        }

        foreach($this->products as $product) {
            if(isset($result[$product[0]][$product[1]])){
                $result[$product[0]][$product[1]]++;
            } else {
                $result[$product[0]][$product[1]] = 1;
            }
        }

        return $result;
    }
}