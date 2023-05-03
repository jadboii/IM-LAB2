<?php
include "db_conn.php";

$sql = "SELECT * FROM tblscinfo ORDER BY ResidentID ASC";
$result = mysqli_query($conn, $sql); // conn from db_conn // 
