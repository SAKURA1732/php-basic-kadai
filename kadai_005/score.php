<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
     <title>テストの平均点を計算しよう</title>
 </head>
 
 <body>
     <p>テストの平均点を計算しよう</p>
     <p>
     <?php
        //生徒10人分の点数を入力
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

// 合計
$sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;


// 数字の数
$count = 10;

// 平均点
$average = $sum / $count;

       // 生徒10人分の点数を表示
       echo $score1 . "<br>";
       echo $score2 . "<br>";
       echo $score3 . "<br>";
       echo $score4 . "<br>";
       echo $score5 . "<br>";
       echo $score6 . "<br>";
       echo $score7 . "<br>";
       echo $score8 . "<br>";
       echo $score9 . "<br>";
       echo $score10 . "<br>";

       // 合計点と平均点を表示
       echo "合計点: " . $sum . "<br>";
       echo "平均点: " . $average . "<br>";
       ?>
     </p>
 </body>
 
 </html>