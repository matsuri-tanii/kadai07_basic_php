<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>朝の自分（入力画面）</title>
</head>

<body>
  <!-- 送り先はaction、送る方法はmethod、送るデータの名前はname -->
  <form action="create.php" method="POST">
    <fieldset>
      <legend>朝の自分（入力画面）</legend>
      <a href="read.php">今までの記録</a>
      
      <div>
        <input type="date" name="date"><input type="time" name="time">
      </div>
      <div>
        天気:
        <input type="radio" name="weather" value="晴れ" checked>☀️
        <input type="radio" name="weather" value="曇り">☁️
        <input type="radio" name="weather" value="雨">☔️
        <input type="radio" name="weather" value="強風">🌀
        <input type="radio" name="weather" value="雪">⛄️
      </div>
      <div>
        体の調子:　🙅　<input type="range" name="body">　🙆<br>
        心の調子:　🙅　<input type="range" name="mental">　🙆
      </div>
      <div>
        今日やれたらやりたいこと:<br>
        　<input type="checkbox" name="item_wantToDo[]" value="ストレッチ">ストレッチ
        　<input type="checkbox" name="item_wantToDo[]" value="お散歩">お散歩
        　<input type="checkbox" name="item_wantToDo[]" value="筋トレ">筋トレ
        　<input type="checkbox" name="item_wantToDo[]" value="ぼーっとする">ぼーっとする<br>
        　<input type="checkbox" name="item_wantToDo[]" value="ゲーム">ゲーム
        　<input type="checkbox" name="item_wantToDo[]" value="手芸">手芸
        　<input type="checkbox" name="item_wantToDo[]" value="読書">読書
        　<input type="checkbox" name="item_wantToDo[]" value="料理">料理

      </div>
      <div>
        今日の自分へ一言: <textarea name="memo"></textarea>
      </div>
      <div>
        <button>記録する</button>
      </div>
    </fieldset>
  </form>

</body>

</html>