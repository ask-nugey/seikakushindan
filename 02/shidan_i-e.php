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

  $aryShindan = [];

  $cnt = 1;
  $aryShindan[$cnt]['question'] = '妻・夫、または彼女・彼氏がいる？';
  $aryShindan[$cnt]['answer'][] = ['point' => 'i', 'text' => 'はい'];
  $aryShindan[$cnt]['answer'][] = ['point' => 'e', 'text' => 'いいえ'];

  $cnt = 2;
  $aryShindan[$cnt]['question'] = 'あなたのLINEの友達の人数は？';
  $aryShindan[$cnt]['answer'][] = ['point' => 'e', 'text' => 'はい'];
  $aryShindan[$cnt]['answer'][] = ['point' => 'i', 'text' => 'いいえ'];

  $cnt = 3;
  $aryShindan[$cnt]['question'] = '週ごとに友達とは何日会う？';
  $aryShindan[$cnt]['answer'][] = ['point' => 'e', 'text' => 'はい'];
  $aryShindan[$cnt]['answer'][] = ['point' => 'i', 'text' => 'いいえ'];

  $cnt = 4;
  $aryShindan[$cnt]['question'] = '年賀状は何枚届いた？';
  $aryShindan[$cnt]['answer'][] = ['point' => 'i', 'text' => 'はい'];
  $aryShindan[$cnt]['answer'][] = ['point' => 'e', 'text' => 'いいえ'];

  $cnt = 5;
  $aryShindan[$cnt]['question'] = 'あけおめLINEが届いた人数は？';
  $aryShindan[$cnt]['answer'][] = ['point' => 'i', 'text' => 'はい'];
  $aryShindan[$cnt]['answer'][] = ['point' => 'e', 'text' => 'いいえ'];

?>


  <form method="post" action="shidan_i-e_branch.php">
  <?php foreach($aryShindan as $key1 => $val1){ ?>
    <!-- 質問文 -->
    <p style="font-weight:bold;"><?php echo $key1.'.'.$val1['question'] ?></p>
    <?php foreach($val1['answer'] as $key2 => $val2){ ?>
    <!-- 　選択肢 -->
    <div><label><input required type="radio" name="shindan<?php echo $key1 ?>" value="<?php echo $val2['point'] ?>"> <?php echo $val2['text'] ?></label></div>
    <?php } ?>
  <?php } ?>
    <input class="bold" type="submit" value="回答する">
  </form>

</body>
</html>
