<?php

$name      = $_POST['name'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$rpassword = $_POST['rpassword'];
$pNumber   = $_POST['pNumber'];
$date      = date("Y/m/d");
$pwdHash   = password_hash($password, PASSWORD_DEFAULT); //hash the password

if(isset($_POST['registerCust'])){

    require "../config.php";
    
    if($password != $rpassword){ //check if rpassword equals to password
        header("Location:../register.php?error=passwordcheck&name=".$name."&email=".$email);
        exit();
    } else {
        $sql  = "SELECT cust_Email FROM customer WHERE cust_Email=?";
        $stmt =  mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: ../register.php?error=emailexisted&name=".$name);
                exit();
            } else { 
                $sql  = "INSERT INTO customer (cust_Name, cust_Email, cust_PhoneNum, cust_Password, cust_DateAdd) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt =  mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $pNumber, $pwdHash, $date);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?register=success");
                }   
            }
        }
    } 
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else if (isset($_POST['registerArt'])) {

    require "../config.php";

    if($password != $rpassword){
        header("Location: ../registerArtist.php?error=passwordcheck&name=".$name."&email=".$email);
        exit();
    } else {
        $sql  = "SELECT artist_Email FROM artist WHERE artist_Email=?";
        $stmt =  mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../registerArtist.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: ../registerArtist.php?error=emailexisted&name=".$name);
                exit();
            } else { 
                $sql  = "INSERT INTO artist (artist_Name, artist_Email, artist_PhoneNum, artist_Password, artist_DateAdd) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt =  mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../registerArtist.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $pNumber, $pwdHash, $date);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../registerArtist.php?register=success");
                    exit();
                }   
            }
        }  
        mysqli_stmt_close($stmt);
        mysqli_close($conn);    
    }
} else { 
    header("Location: ../registerArtist.php");
    exit();
}
?>