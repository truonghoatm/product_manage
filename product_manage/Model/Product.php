<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 16/02/2019
 * Time: 17:38
 */

namespace Model;

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $productVendor;

    public function __construct($name, $price, $description, $productVendor)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->productVendor = $productVendor;
    }


}