<?php
$fruits = [0 => "りんご", 1 => "みかん", 2 => "ぶどう"];
$count = count($fruits);

function export_fruits ($number){
    $type = is_int($number);
    global $count;
    global $fruits;
    if ($type == 1) { 
        if ($number <= $count){
            echo "これから果物を{$number}個、出荷します！\n";
            for ($i = 0; $i < $number; $i++){
                echo "{$fruits[0]}を出荷！\n";
                array_shift($fruits);
            }
            echo "すべての出荷が完了しました。\n";
            $count = count($fruits);
            if ($count === 0){
                echo "これで在庫はもうありません。\n";
            }else{
                echo "残りの在庫状況は以下のとおりです。\n";
                var_export($fruits);
            }
        }else{
            echo "指定した数量が在庫数を超えています。\n";
        }
    }else{
        echo "エラー：整数の値を入力してください。\n";
    }
}
// 試行1回目:在庫3つのうち、2つを出荷
echo "--- 試行1回目です！ ---\n";
export_fruits(2);

//試行2回目:残りの1つを出荷
echo "--- 試行2回目です！ ---\n";
export_fruits(1);

//試行3回目:在庫切れでエラー
echo "--- 試行3回目です！ ---\n";
export_fruits(2);
?>