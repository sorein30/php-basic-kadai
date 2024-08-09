<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order){
          // orderがTRUEのとき昇順に並び替える
          if ($order) {
            echo "『昇順にソートします。』". "<br>";
            sort($array);
          } else {
            echo "『降順にソートします。』". "<br>";
            rsort($array);
          }
          foreach ($array as $num) {
            echo $num. "<br>";
          }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
