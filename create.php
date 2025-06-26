<?php
header("Content-Type: text/html; charset='UTF-8'");
// var_dump($_POST);
// exit();

$date = $_POST['date'];
// echo($date);

$time = $_POST['time'];
if(isset($_POST['weather'])){
    $weather = $_POST['weather'];
}else{
    echo "天気を選択してください";
}
// echo($time);

$body = $_POST['body'];
if($body >= 0 && $body < 21){
    $bodyStatus = "悪い";
}elseif($body >= 21 && $body < 41){
    $bodyStatus = "やや悪い";
}elseif($body >= 41 && $body < 61){
    $bodyStatus = "まあまあ";
}elseif($body >= 61 && $body < 81){
    $bodyStatus = "やや良い";
}elseif($body >= 81 && $body <= 100){
    $bodyStatus = "良い";
}
// echo($bodyStatus);

$mental = $_POST['mental'];
if($mental >= 0 && $mental < 21){
    $mentalStatus = "悪い";
}elseif($body >= 21 && $body < 41){
    $mentalStatus = "やや悪い";
}elseif($body >= 41 && $body < 61){
    $mentalStatus = "まあまあ";
}elseif($body >= 61 && $body < 81){
    $mentalStatus = "やや良い";
}elseif($body >= 81 && $body <= 100){
    $mentalStatus = "良い";
}
// echo($mentalStatus);

if(isset($_POST['item_wantToDo']) && is_array($_POST['item_wantToDo'])) {
    $item_wantToDo = $_POST['item_wantToDo'];
    $wantToDo = implode(", ", $item_wantToDo);
    // echo($wantToDo);
}
$memo = $_POST['memo'];
// echo($memo);



// 2025-06-25 12:00
// 天気:晴れ
// 体の調子:まあまあ(50)→(悪い:0~20 やや悪い:21~40 まあまあ:41~60 やや良い:61~80 良い:81~100)
// 心の調子:まあまあ(50)→(悪い:0~20 やや悪い:21~40 まあまあ:41~60 やや良い:61~80 良い:81~100)
// 今日やれたらやりたいこと:お散歩, ぼーっとする
// 今日の自分へ一言:15分お散歩する

// 2025-06-26 7:00
// 天気:雨
// 体の調子:良い(100)
// 心の調子:やや良い(85)
// 今日やれたらやりたいこと:ストレッチ, 筋トレ
// 今日の自分へ一言:すごく頑張れそう

// 2025-06-27 14:00
// 天気:曇り
// 体の調子:まあまあ(50)
// 心の調子:悪い(0)
// 今日やれたらやりたいこと:ぼーっとする, ゲーム, 手芸
// 今日の自分へ一言:すごくサボりたい



$write_data = "{$date} {$time}\n天気:{$weather}\n体の調子:{$bodyStatus}({$body})\n心の調子:{$mentalStatus}({$mental})\n今日やりたいこと:{$wantToDo}\n今日の一言:{$memo}<br><br>";



$file = fopen('data/diary.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location: input.php');
exit();