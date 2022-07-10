<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>アンケート</title>
  <style>
        body{
                text-align: center;
                font-size: 40px;
            }
    .link {
        font-size: 60px;
        padding: 200px;
    }
    </style>
</head>
<body>
    <header>
        <div class="link"a href="index.php">アンケート</div>
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
