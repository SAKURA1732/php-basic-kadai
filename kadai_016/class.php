<?php

// Foodクラスを作成
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "The price is " . $this->price ."\n";
    }
}

// Animalクラスを作成
class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "The height is " . $this->height ."\n";
    }
}

// Foodクラスのインスタンスを作成
$milk = new Food("Milk", 190);
$bread = new Food("Bread", 100);

// Animalクラスのインスタンスを作成
$dog = new Animal("Dog", 50, 10);
$cat = new Animal("Cat", 30, 5);

// インスタンスを出力
echo "Food Instances:\n";
print_r($milk);
print_r($bread);

echo "\nAnimal Instances:\n";
print_r($dog);
print_r($cat);

// Foodクラスのメソッドを実行
$milk->show_price();
$bread->show_price();

// Animalクラスのメソッドを実行
$dog->show_height();
$cat->show_height();

?>