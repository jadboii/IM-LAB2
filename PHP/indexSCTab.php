<?php

require_once('config/db.php');
$query = "select * from tblscinfo";
$result = mysqli_query($con, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,800;1,900&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <nav>
            <div class="brngyLbl">BARANGAY 48, PASAY CITY</div>
                <ul class="navItems">
                    <li id = "db"><a href="index.php">DASHBOARD</li>
                    <li id = "af"><a href="indexApplicForm.php">ADD REC</li>
                    <li id = "sc"><a href="#">SENIOR CITIZENS</li>
                </ul>

                <div class="logo">
                    <a href="#"><img src="pasay-logo-1 (4).png" alt="PasayLogo" id="brngyPic"></i></a>
                </div>
        </nav>

        <div id="DataContainer">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="cardHeader">
                            <div id="official-lbl"><p>Barangay Senior Citizens List</p></div>
                            
                            <?php if(isset($_GET['Success'])) 
                            { ?>

                            <div class="successMsg" role="alert">
                            <?php echo $_GET['Success']; ?>
                            </div>

                            <?php }
            
                            ?>
                        </div>



                        <div class="card-body">
                            <table class = "table-bordered">
                                
                                <tr class = "tbl-colHeader">
                                    <td>Resident ID</td>
                                    <td>Last Name</td>
                                    <td>First Name</td>
                                    <td>Middle Name</td>
                                    <td>Address</td>
                                    <td>Birth Date</td>
                                    <td>SC No.</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>

                                <tr>
                                <?php
                                    
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <td><?php echo $row['ResidentID']; ?></td>
                                <td><?php echo $row['LastName']; ?></td>
                                <td><?php echo $row['FirstName']; ?></td>
                                <td><?php echo $row['MiddleName']; ?></td>
                                <td><?php echo $row['Address']; ?></td>
                                <td><?php echo $row['BirthDate']; ?></td>
                                <td><?php echo $row['SCNum']; ?></td>
                                <td><a href="config/update.php?id=
                                <?=$row['ResidentID']?>"
                                 class="btnEdit">EDIT / UPDATE</td>
                                <td><a href="#" class="btnDel">DELETE</td>

                                    </tr>
                                <?php
                                    }
                                    
                                ?>
                                </tr>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>
</html>