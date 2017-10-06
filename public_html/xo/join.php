<?php
  $name   = $_GET['name'];
  $key    = $_GET['key'];
  $player = $_GET['player'];

  $link = mysqli_connect('localhost', 'id1936676_vasyoid', 'v73kvi32u', 'id1936676_mydb');

  $r = mysqli_query($link, "SELECT keyCode FROM xoBoards WHERE name = \"$name\"");

  if (strval(mysqli_fetch_assoc($r)["keyCode"]) != $key) {
    print("WrongKeyCode");
    exit;
  }

  mysqli_query($link, "UPDATE xoBoards SET joined = TRUE, player2 = \"$player\" WHERE xoBoards.name = \"$name\"");

  mysqli_query($link, "CREATE TABLE xobrd$name(number INT, x INT, y INT)");
  
  $r = mysqli_query($link, "SELECT player1, height, width, length FROM xoBoards WHERE name = \"$name\"");
  $res = mysqli_fetch_assoc($r);
  
  print($res["player1"] . " " . $res["height"] . " " . $res["width"] . " " . $res["length"]);

?>