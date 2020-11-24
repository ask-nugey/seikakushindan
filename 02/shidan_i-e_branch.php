<?php
// ここから↓
$result_i = 0;
$result_e = 0;
foreach($_POST as $key => $value){
    if($value === 'i'){
        $result_i++;
    } elseif ($value === 'e') {
        $result_e++;
    }
}
// ここまで↑は、前回のコードと同じ

// 診断結果により、リダイレクトさせます
if($result_i > $result_e){
    header('location: shindan-result_i.php');
}else{
    header('location: shindan-result_e.php');
}
exit;
