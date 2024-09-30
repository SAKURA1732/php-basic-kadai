<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
    <?php
    // クラスを定義する
    class Food
    {
    // プロパティを定義する
    private $name;
    private $price;

    // コンストラクタを定義する
    public function __construct(string $name, int $price)
    {
    $this->name = $name;
    $this->price = $price;
    }

    // メソッドを定義する
    public function getPrice()
    {
    return $this->price;
    }
    }

    // クラスを定義する
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function getHeight()
      {
        return $this->height;
      }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // インスタンス化する
    $food = new Food('potato', 250);
    // インスタンス$foodを出力する
    print_r($food) ;
    echo "<br>";
    // インスタンス$animalを出力する
    print_r($animal) ;
    echo "<br>";
    // インスタンス$foodの価格を出力する
    echo $food->getPrice();
    echo "<br>";
    // インスタンス$animalの身長を出力する
    echo $animal->getHeight();
    ?>
    </p>
 </body>
 
 </html>