<?php
//課題5【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)

//元のプログラム
/*$2018_calendar = {
  "January" => "1月",
  "February" => "2月"、
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" = "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => 10月,
  "November" => "11月",
  "December" => "12月"
};

// 12月を表示する
echo $2018_calendar[December];*/

//修正したプログラム
//①配列名の先頭が数字になっているため、先頭をアルファベットに変更
$calendar_2018 = [//②"{}"を"[]"に修正
  "January" => "1月",
  "February" => "2月",//③"、"を","に修正
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",//④"="を"=>"に修正
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",//⑤"10月"を""10月""に修正
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];//⑥表示する配列名を修正
?>