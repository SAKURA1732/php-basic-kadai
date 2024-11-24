<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // POSTのリクエストからデータを取得する
  $name = isset($_POST['employee_name']) ? $_POST['employee_name'] : '';
  $age = isset($_POST['employee_age']) ? $_POST['employee_age'] : '';
  $department = isset($_POST['department']) ? $_POST['department'] : '';
} else {
  // POSTリクエストでない場合は、フィールドを空にする
  $name = '';
  $age = '';
  $department = '';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>KADAI_WEB_APP</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>

        <tr>
            <td>所属部署</td>
            <td><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>

    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>

    <?php
     // 入力項目にエラーがある場合の処理
     if (!empty($errors)) {
         // 配列内のエラーメッセージを順番に出力
         foreach ($errors as $error) {
             echo '<font color="red">' . $error . '</font>' . '<br>';
         }
 
         // 確定ボタンを無効化するJavaScriptコードをブラウザ側に送信
         echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
     }
     ?>
</body>

</html>