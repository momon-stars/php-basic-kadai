<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_sort</title>
</head>

<body>

    <?php
      // $nums = [15,4,18,23,10];
      // echo '昇順にソートします。<br>';
      // asort($nums);
      // foreach($nums as $value){
      //   echo $value . '<br>';
      // }
      // echo '降順にソートします。<br>';
      // arsort($nums);
      // foreach($nums as $value){
      //   echo $value . '<br>';
      // }
      function sort_2way($array,$order){
        
        if($order){
          echo'昇順<br>';
          asort($array);
        } else {
          echo"降順<br>";
          arsort($array);
        }

        foreach($array as $value){
          echo $value.'<br>';
        }
      }
      //  ソートする配列を宣言
        $array = [15, 4, 18, 23, 10 ];
      sort_2way($array,true);
      sort_2way($array,false);
    ?>
</body>

</html>
</body>

</html>