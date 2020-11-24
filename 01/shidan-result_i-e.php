<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>外向・内向 - 性格診断テスト</title>
</head>
<body>
  <h1>外向・内向 - 性格診断テスト</h1>

<?php

// 診断結果を受け取る変数
$result_i = 0;
$result_e = 0;

// 診断結果を集計
foreach($_POST as $key => $value){
    if($value === 'i'){
        $result_i++;
    } elseif ($value === 'e') {
        $result_e++;
    }
}

// 診断結果を集計結果により、診断結果の文章を変更!
if($result_i > $result_e){
    $result = '診断結果：内向型（I）';
}else{
    $result = '診断結果：外向型（E）';
}
?>

  <!-- 診断結果を表示 -->
  <p><?php echo $result ?></p>

</body>
</html>
