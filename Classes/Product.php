<?php
class Product
{
    private int $id;
    private string $name;
    private float $price;
    private string $img;
    private string $categoria;
    private string $distribuidor;
    private string $marca;


    
    public function __construct($id,$name, $price, $img,$categoria,$distribuidor,$marca)
    {   $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->categoria=$categoria;
        $this->marca=$marca;
        $this->distribuidor=$distribuidor;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    
    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    
    /**
     * Get the value of distribuidor
     */
    public function getDistribuidor()
    {
        return $this->distribuidor;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setDistribuidor($distribuidor)
    {
        $this->distribuidor = $distribuidor;

        return $this;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    public static function __set_state($data)
    {
        $product = new Product(0,'', 1, '','00','','');
        foreach ($data as $key => $value) {
            $product->$key = $value;
        }
        return $product;
    }


}


?>