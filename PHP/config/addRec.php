    <?php
    if(isset($_POST['create'])){
        require_once "db_conn.php";
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $LastName = validate($_POST['LastName']);
        $FirstName = validate($_POST['FirstName']);
        $MiddleName = validate($_POST['MiddleName']);
        $Address= validate($_POST['Address']);
        $BirthDate = validate($_POST['BirthDate']);
        $SCNum = validate($_POST['SCNum']);

        $user_data = 'Last Name='.$LastName. '&First Name='.$FirstName. '&Middle Name'.$MiddleName. '&Address'. $Address. '&BirthDate'. $BirthDate. '&SCNum'. $SCNum;

        if (empty($LastName)){
            header("Location: ../indexApplicForm.php?error=Last Name is required&$user_data");
        }

        else if(empty($FirstName)){
            header("Location: ../indexApplicForm.php?error=First Name is required&$user_data");
        }

        else if(empty($MiddleName)){
            header("Location: ../indexApplicForm.php?error=Middle Name is required&$user_data");
        }

        else if(empty($Address)){
            header("Location: ../indexApplicForm.php?error=Address is required&$user_data");
        }

        else if(empty($BirthDate)){
            header("Location: ../indexApplicForm.php?error=Birth date is required&$user_data");
        }

        else if(empty($SCNum)){
            header("Location: ../indexApplicForm.php?error=SC Number is required&$user_data");
        }
        
        else{
            $sql = "INSERT INTO tblscinfo(LastName, FirstName, MiddleName, Address, BirthDate, SCNum) 
                    VALUES('$LastName', '$FirstName', '$MiddleName', '$Address', '$BirthDate', '$SCNum')";
                $result = mysqli_query($conn, $sql);

            if($result){
                header("Location: ../indexRead.php?success=succesfully created&$user_data"); 
            }else{
                header("Location: ../indexApplicForm.php?error=unknown error occured&$user_data");
            }
        }
}