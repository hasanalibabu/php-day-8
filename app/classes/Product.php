<?php
namespace App\classes;
class Product
{
    public $data = [

                0=> [
                    'id'=>'0',
                    'title' => 'Shirt',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: easy',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart Shirt',
                    'image' => 'w1.jpg',
                ],
                1=> [
                    'id'=>'1',
                    'title' => 'T-Shirt',
                    'price'  => 'Tk. 900',
                    'brand' => 'Brand: TextPoint',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart T-Shirt',
                    'image' => 'w2.jpg',
                ],
                2=> [
                    'id'=>'3',
                    'title' => 'sunglasses',
                    'price'  => 'Tk. 2200',
                    'brand' => 'Brand: B&H',
                    'category' => 'Category: medium',
                    'description'=> 'Desc:',
                    'image' => 'w3.jpg',
                ],
                3=> [
                    'id'=>'4',
                    'title' => 'leather',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Rick',
                    'category' => 'Category: deny',
                    'description'=> 'Desc: Smart',
                    'image' => 'w4.jpg',
                ],
                4=> [
                    'id'=>'5',
                    'title' => 'Perfume',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Rico',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Axe',
                    'image' => 'w5.jpg',
                ],

            ];
    public function getAllProduct()
    {
        return $this->data;
    }

}
