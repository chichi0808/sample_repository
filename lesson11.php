<?php

$today = date("Y-m-d H:i:s") . "<br>";
print_r($today) . "<br>";

echo date("Y-m-d",strtotime("+3 day")) . "<br>";

echo date("Y-m-d H:i:s",strtotime("-12 hour")) . "<br>";

date_default_timezone_set('Asia/Tokyo') . "<br>";
$today = new DateTime('now');
echo $today->format('Y年m月d日 H時i分s秒') . "<br>";



// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mmY月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください
