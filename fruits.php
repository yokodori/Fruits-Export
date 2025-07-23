<?php
$fruits = [0 => "りんご", 1 => "みかん", 2 => "ぶどう"];
$count = count($fruits);

function export_fruits ($number){
    global $count;
    global $fruits;
    if ($number <= $count){
        echo "これから果物を{$number}個、出荷します！\n";
        for ($i = 0; $i < $number; $i++){
            echo "{$fruits[$i]}を出荷！\n";
        }
        echo "すべての出荷が完了しました。\n";
        $count = count($fruits);
        if ($count === 0){
            echo "これで在庫はもうありません。";
        }else{
            echo "残りの在庫状況は以下のとおりです。";
            var_export($fruits);
        }
    }else{
        echo "指定した数量が在庫数を超えています。\n";
    }
}
export_fruits(3)
?>