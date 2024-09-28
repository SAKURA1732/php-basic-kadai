<?php
// 連想配列を入力
$vegetable = array(
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
);

// キーと値を出力
foreach ($vegetable as $key => $value) {
    echo $key . "：" . $value . "<br>";
}
?>