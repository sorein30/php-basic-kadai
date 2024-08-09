<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Foodクラスの定義
        class Food {
          // プロパティ
          private $name;
          private $price;

          // コンストラクタ
          public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
          }

          // メソッド
          public function show_price() {
            echo $this->price . "<br>";
          }
        }

        // Animalクラスの定義
        class Animal{
          // プロパティ
          private $name;
          private $height;
          private $weight;

          // コンストラクタ
          public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          // メソッド
          public function show_height() {
            echo $this->height. "<br>";
          }
        }

        // インスタンス化
        $potato = new Food("potato", 250);
        $dog = new Animal("dog", 60, 5000);

        print_r($potato);
        echo "<br>";
        print_r($dog);
        echo "<br>";
        // プロパティの表示
        $potato->show_price();
        $dog->show_height();
        ?>
    </p>
</body>

</html>
