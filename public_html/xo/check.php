<?php
  $name   = $_GET['name'];
  $key    = $_GET['key'];

  $link = mysqli_connect('localhost', 'id1936676_vasyoid', 'v73kvi32u', 'id1936676_mydb');

  $r = mysqli_query($link, "SELECT keyCode, joined, player2 FROM xoBoards WHERE name = \"$name\"");

  $res = mysqli_fetch_assoc($r);

  if (strval($res["keyCode"]) == $key && boolval($res["joined"])) {
    print(strval($res["player2"]));
  }

?>