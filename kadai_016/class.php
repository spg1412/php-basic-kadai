<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>16章課題</title>
</head>
<body>
<p>
  <?php
  //Class Food
  class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
      }

      public function show_price() {
          echo $this->price . '<br>';
      }
  }
  //Class Animal
  class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
      }

      public function show_height() {
          echo $this->height . '<br>';
      }
  }

  // Creating the Instances
  $food = new Food('potato', 250);
  $animal = new Animal('dog', 60, 5000);

  print_r($food);
  echo '<br>';
  print_r($animal);
  echo '<br>';

  // Accessing the Methods
  $food->show_price();
  $animal->show_height();
  ?>
</p>
</body>
</html>