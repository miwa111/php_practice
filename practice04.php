<?php
//PHP/Laravel 04 関数を理解しよう

//1.引数に数値を指定して実行すると数値を2倍にして返す関数を作成してください
function a($max) {
  $result = $max * 2;
  return $result;
}
// 関数を実行する
echo a(100) . "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a , $b) {
  $result = $a + $b;
  return $result;
}
echo add(15, 25);
echo "\n";

//課題3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$array = array(9,7,5,3,1);

function sum_arr($arr){
  $value = 1;
  foreach ($arr as $result){
    $value *=$result;
  }
echo $value;
}

sum_arr($array);
echo "\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
$array = array(7,5,3,2,1,9);
function max_array($arr){
//とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
  
if($max_number < $a){
  $max_number = $a;
}  
}

return $max_number;
}
echo max_array($array)."\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
//【strip_tags】文字列からHTMLタグを取り除く
$str = “<h1>HTMLから</h1></br><p>タグ取り除く関数、それが<b>strip_tags</b></p>”;
echo strip_tags($str);
echo “\n”;

//【array_push】指定した配列の末尾に要素を追加
$jojo3 = array(‘jotarou’, ‘Joseph’);

//一旦表示
foreach($jojo3 as $jojo3_all){
echo $jojo3_all;
echo “\n”;
}

echo “\n”;

array_push($jojo3, ‘kakyoin’, ‘Abdul’, ‘Polnareff’ ,’Iggy’);

//結果の表示
foreach($jojo3 as $jojo3_all){
echo $jojo3_all;
echo “\n”;
}

//【array_merge】指定した複数の配列を結合
$eva = array(‘ayanami’, ‘asuka’, ‘shinji’);
$eva2 = array(‘mari’, ‘touji’, ‘kaworu’);

//配列を結合、結果表示
foreach(array_merge($eva,$eva2) as $eva_all){
echo $eva_all;
echo “\n”;
}

/*【time,mktime,dateについて】
『time』現在時刻をUnixエポックからの経過秒として返す
『mktime』引数に指定した日時からUnixタイムスタンプを取得
『date』日付、時刻、曜日を表示する
*/

//日本時間のセット
date_default_timezone_set (‘Asia/Tokyo’);
$nowTime = time();//現在の時刻

//timeの結果表示
echo date(‘Y年m月d日 H時m分s秒’, $nowTime);
echo “\n”;

//mktimeの結果表示
$birthday = mktime( 0, 15, 32, 10, 11, 1981);
echo date(‘Y年m月d日 H時m分s秒’, $birthday);
echo “\n”;



?>
