<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <?php
  $score = ['Id'=>1,'名前'=>'侍太郎','年齢'=>30];
  foreach ($score as $key=>$value){
    echo "{$key}:{$value}<br>";
  }
  ?>
</body>

</html>