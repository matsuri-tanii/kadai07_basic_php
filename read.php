<?php
$str = '';

$file = fopen('data/diary.txt', 'r');
flock($file, LOCK_EX);

if ($file) {
    while (($line = fgets($file))) {
        // 1行ずつ読み込んで、$strに追加
        $str .= "<tr><td>{$line}</td></tr>";
    }
}

flock($file, LOCK_UN);
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今までの記録</title>
</head>

<body>
  <fieldset>
    <legend>今までの記録</legend>
    <a href="input.php">朝の自分（入力画面）</a>
    <table>
      <thead>
        <tr>
          <th>ふりかえってみる</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
        <!-- ここにPHPで読み込んだデータを表示 -->
      </tbody>
    </table>
  </fieldset>
</body>

</html>