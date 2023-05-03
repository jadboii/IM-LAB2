<?php

if (isset($_GET["ResidentID"])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $ResidentID = validate($_POST['ResidentID']);

    $sql = "SELECT * FROM tblscinfo WHERE ResidentID = $ResidentID";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: config/read.php");
    }
}