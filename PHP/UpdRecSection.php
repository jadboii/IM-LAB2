<?php
include 'config/update.php';
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
                    <li id = "af"><a href="#">ADD REC</li>
                    <li id = "sc"><a href="indexRead.php">SENIOR CITIZENS</li>
                </ul>

                <div class="logo">
                    <a href="#"><img src="pasay-logo-1 (4).png" alt="PasayLogo" id="brngyPic"></i></a>
                </div>
        </nav>

        <div id="DataContainer2">
            <div id="official-lbl"><p>UPDATE RECORD</p></div>

            <div class="formSection1">
                <form action="config/update.php" 
                method="post">
            
            <?php if(isset($_GET['error'])) { ?>

            <div class="warningMsg" role="alert">
                <?php echo $_GET['error']; ?>
            </div>

            <?php } ?>

                    <label for="LastName">Last Name</label>

                    
                    <input type="text"
                    class="formControl" 
                    name="LastName" 
                    id="LastName"
                    value="<?=$row['LastName']; ?>">
        

                    <label for="First Name">First Name</label>
                    <input type="text"
                    class="formControl"  
                    name="FirstName" 
                    id="FirstName"
                    value="<?=$row['FirstName']; ?>">

                    <label for="Middle Name">Middle Name</label>
                    <input type="text"
                    class="formControl"  
                    name="MiddleName" 
                    id="MiddleName"
                    value="<?=$row['MiddleName']; ?>">

                    <label for="Address<">Address</label>
                    <input type="text" 
                    class="formControl" 
                    name="Address" 
                    id="Address"
                    value="<?=$row['Address']; ?>">

                    <label for="BirthDate">Birth Date</label>
                    <input type="text" 
                    class="formControl" 
                    name="BirthDate" 
                    id="BirthDate"
                    value="<?=$row['BirthDate']; ?>">

                    <label for="SCNum">Senior Citizen Number</label>
                    <input type="text" 
                    class="formControl" 
                    name="SCNum" 
                    id="SCNum"
                    value="<?=$row['SCNum']; ?>"
                    placeholder="Enter SC Number">

                    <div class="btnSec">

                        <button type = "submit" 
                        class="btnPrimary"
                        name="create">Submit</button>

                    </div>

                </form>

            </div>                    
        </div>
</body>
</html>