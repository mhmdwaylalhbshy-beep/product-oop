<?php

class Product
{
    public $name;
    public $price;
    public $brand;
    public $image;
    public $content;
    public $tax;

    public function getName()
    {
        return $this->name;
    }

    public function priceafterDiscount($disc)
    {
        return $this->price - ($this->price * $disc / 100);
    }

    public function getfinalPrice($disc)
    {
        $priceafterDiscount = $this->priceafterDiscount($disc);

        return $priceafterDiscount + ($priceafterDiscount * $this->tax / 100);
    }
    
}
$product1 = new Product();

$product1->name = "laptop";
$product1->price = 30000;
$product1->brand = "dell";
$product1->image = "images/laptop.jpg";
$product1->content = "laptop ";
$product1->tax = 14;


$product2 = new Product();

$product2->name = "phone";
$product2->price = 15000;
$product2->brand = "iphone";
$product2->image = "images/phone.jpg";
$product2->content = "smartphone";
$product2->tax = 14;


$product3 = new Product();

$product3->name = "headphone";
$product3->price = 3000;
$product3->brand = "sony";
$product3->image = "images/headphone.jpg";
$product3->content = "headphone";
$product3->tax = 14;