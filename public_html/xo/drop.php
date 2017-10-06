<?php
  $name   = $_GET['name'];
  $key   = $_GET['key'];

  $link = mysqli_connect('localhost', 'id1936676_vasyoid', 'v73kvi32u', 'id1936676_mydb');

  $r = mysqli_query($link, "SELECT keyCode FROM xoBoards WHERE name = \"$name\"");

  if (strval(mysqli_fetch_assoc($r)["keyCode"]) != $key) {
    print("WrongKeyCode");
    exit;
  }

  mysqli_query($link, "DELETE FROM xoBoards where name = \"$name\"");
  mysqli_query($link, "DROP TABLE xobrd$name");

?>