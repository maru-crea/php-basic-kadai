<?php
// Step2: Foodクラスを作成
class Food
{
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price()
    {
        echo $this->price . "<br>";
    }
}

// Step2: Animalクラスを作成
class Animal
{
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height()
    {
        echo $this->height . "<br>";
    }
}

// Step3: インスタンスを作成して出力
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 500);

print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// Step4: メソッドを実行
$food->show_price();   // 250
$animal->show_height(); // 60
?>