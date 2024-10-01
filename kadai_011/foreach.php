<!DOCTYPE html>
<html lang=" ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題_011</title>
</head>

<body>
    <p>
      <?php
      // 連想配列を定義
      $vegetable_data = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
      ];

      // 配列のキーと値を出力
      foreach ($vegetable_data as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      ?>
    </p>
</body>

</html>