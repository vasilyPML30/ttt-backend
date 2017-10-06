<?php

  $name   = $_GET['name'];
  $key    = $_GET['key'];
  $player = $_GET['player'];
  $h = $_GET['h'];
  $w = $_GET['w'];
  $len = $_GET['len'];

  $link = mysqli_connect('localhost', 'id1936676_vasyoid', 'v73kvi32u', 'id1936676_mydb');

  $r = mysqli_query($link, "SELECT COUNT(*) FROM xoBoards WHERE name = \"$name\"");

  if (intval(mysqli_fetch_assoc($r)["COUNT(*)"]) > 0) {
    print("BoardAlreadyExists");
    exit;
  }

  mysqli_query($link, "INSERT INTO xoBoards VALUES( \"$name\", \"$key\", \"$player\", \" \", $h, $w, $len, FALSE)");

?>