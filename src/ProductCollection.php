<?php

class Products{
    private $products = array();
    public function getProducts()
    {
        //leer del archivo cart
        
        return $this->products;
    }

    public function addProduct($product, $key)
    {
        $this->products[$key] = $product;
    }


    /**
     * Set the value of products
     *
     * @return  self
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
    
    public function countProducts() {
        $count = 0;
        foreach ($this->products as $product) {
            if ($product instanceof Product) {
                $count++;
            }
        }
        return $count;
    }
}


?>