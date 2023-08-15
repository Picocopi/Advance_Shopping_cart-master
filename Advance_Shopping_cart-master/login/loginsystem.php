
<?php
session_start();
include ("../php/db_conn.php");
if (isset($_POST['username']) && isset ($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $sID = validate($_POST['username']);
    $pass = validate($_POST['password']); 

    if(empty($sID)){
        header("Location: login.php?error=User Name is required");
        exit();

    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM member WHERE user_name = '$sID' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $sID && $row['password'] === $pass){
                $_SESSION['user_name']=$row['user_name'];
                $_SESSION['email']=$row['email'];
                
                header("Location: ../index.php");
                exit();
                
                
            }else{
                header("Location: login.php?error=Incorrect user name or password");
                exit();
            }
        }
        else{
            header("Location: login.php?error=Incorrect user name or password");
            exit();
        }
        
    }
    
   

}else{
    header("Location:login.php");
    exit();
}




?>