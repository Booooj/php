<?php

try {

    $pdo = new PDO(
      'mysql:dbname=form;host=localhost;charset=utf8',
      'root',
      '',
      [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]
    );
  
  } catch (PDOException $e) {
  
      echo "接続失敗".
      exit($e->getMessage());
  
  }

$date = $_POST['date'];
$favorite = $_POST['favorite'];
$menu = $_POST['menu'];

$sql = "INSERT INTO form(favorite, menu, date, created_at, updated_at) VALUES(:favorite,  :menu, :date, now(), now())";

$s = $pdo->prepare($sql);

$s->bindParam(':favorite', $favorite, PDO::PARAM_STR);
$s->bindParam(':menu', $menu, PDO::PARAM_STR);
$s->bindParam(':date', $date, PDO::PARAM_STR);

$s->execute();

header('Location: ./index.php');
exit;