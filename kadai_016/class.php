<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>
<body>
  <?php
  class Food {
    public $name;
    public $price;
  
    public function __construct(string $name,int $price){
      $this->name = $name;
      $this->price = $price;
    }
    public function show_name(){
      echo $this->name.'<br>';
    }
  }
  $show_price = new Food('potato',250);
  print_r($show_price);

  echo '<br>';

  class Animal {
    public $name;
    public $height;
    public $weight;
  
    public function __construct(string $name,int $height,int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height(){
      echo $this->name.'<br>';
    }
  }
  $show_height = new Animal('dog',60,5000);
  print_r($show_height);

  echo '<br>';

  echo $show_price->price;
  echo '<br>';
  echo $show_height->height;
  ?>
</body>
</html>