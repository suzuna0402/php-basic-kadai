<!DOCTYPE html>

<html lang="ja">

<head>
 <meta charset=”UTF-8″>
 <title>課題：PHPクラスの使い方</title>
</head>

<body>
  <p>
    <?php
      class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function show_price() {
        echo "価格は {$this->price} 円です。\n";
    }
    }

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
        echo "身長は {$this->height} cmです。\n";
    }
    }

    $apple = new Food("りんご", 150);
    $dog = new Animal("ポチ", 60, 8);

    print_r($apple);
    print_r($dog);

    $apple->show_price();
    $dog->show_height();

    ?>
  </p>
</body>

</html>