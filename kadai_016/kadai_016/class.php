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
      class Food {
        // プロパティを定義する
        private $name;
        private $price;
        
        // 価格を取得するメソッドを定義
        public function getPrice() {
          return $this->price;
        }

        // メソッドを定義する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      // インスタンス化する
      $food = new Food('potato', 250);

      // インスタンス$foodの各プロパティの値を出力する
      print_r($food);
      echo '<br>'; 
    ?>
  </p>
  <p>
      <?php
      // クラスを定義する
      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // 高さを取得するメソッドを定義する
        public function getHeight() {
          return $this->height;
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      // インスタンス化する
      $animal = new Animal('dog', 60, '5000');

      // インスタンス$animalの各プロパティの値を出力する
      print_r($animal);
      echo '<br>'; 

      // 取得した値を出力する
      // Foodクラスのインスタンスから価格を取得する
      echo $food->getPrice().'<br>';

      // Animalクラスのインスタンスから高さを取得する
      echo $animal->getHeight().'<br>';
      ?>
  </p>
</body>
</html>