<?php
require_once("database.php");

$search = isset($_GET["search"])?$_GET["search"]:"";

  $sql_cate = "SELECT * FROM calligraphies WHERE name LIKE '%$search%'";
  $result_cate = $conn->query($sql_cate);
  while($row = $result_cate-> fetch_assoc()){
    $list[] = $row;
  }