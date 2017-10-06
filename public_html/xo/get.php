<?php
  $name   = $_GET['name'];
  $key    = $_GET['key'];
  $number = $_GET['number'];
  
  $link = mysqli_connect('localhost', 'id1936676_vasyoid', 'v73kvi32u', 'id1936676_mydb');

  $r = mysqli_query($link, "SELECT keyCode FROM xoBoards WHERE name = \"$name\"");

  if (strval(mysqli_fetch_assoc($r)["keyCode"]) != $key) {
    print("WrongKeyCode");
    exit;
  }

  $r = mysqli_query($link, "SELECT * FROM xobrd$name");
  $res = mysqli_fetch_assoc($r);

  print($res["number"] . " " . $res["x"] . " " . $res["y"]);

?>