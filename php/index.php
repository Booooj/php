<?php

try {

  $pdo = new PDO(
    'mysql:dbname=food;host=localhost;charset=utf8',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );

} catch (PDOException $e) {

    echo '接続失敗'.
    exit($e->getMessage());

}


function h($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


$sql = "SELECT * FROM form";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$form = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>ご協力ありがとうございました。</title>
</head>
<body>
    <header>
    <a href="./Form.php">アンケートを投稿！！</a>
    </header>
　　　アンケート一覧
          <table>
            <thead>
              <tr>
                <th>日付</th>
                <th>おいしかったメニュー</th>
                <th>ほかにこんなメニューがあれば</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach($form as $form): ?>

                <tr>
                  <td><?php echo h($form['date']); ?></td>
                  <td><?php echo h($form['favorite']); ?></td>
                  <td><?php echo h($form['menu']); ?></td>
                </tr>

              <?php endforeach; ?>

            </tbody>
          </table>
</body>
</html>