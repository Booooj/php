<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>アンケート</title>
</head>
<body>
    <header>
        <a href="index.php">アンケート</a>
    </header>
    <form action="./create.php" method="POST">
        <label for="date">日付</label>
        <input type="date" id="date" name="date">
       <p> <label for="favorite">おいしかったメニューは？</label>
        <input type="text" id="favorite" name="favorite"></p>
        <p><label for="menu">こんなメニューがあれば（例：五目チャーハン）</label>
        <input type="text" id="menu" name="menu"></p>
        <button type="submit" class="btn btn-warning">提出</button>
    </form>
</body>
</html>