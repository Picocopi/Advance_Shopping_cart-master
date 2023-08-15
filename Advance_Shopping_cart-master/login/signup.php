<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-8"  />
    <link rel="stylesheet" href="signstyle.css">
  
    <!-- <script type="text/javascript" src="funtion.js"></script> -->

    <title>ILLEGEAR sign up page</title>
    <style>
         .error{
        margin-left: 25px;
        margin-top: 10px;
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width:80%;
        border-radius: 5px;
        
    }

    .success {
    margin-left: 25px;
    margin-top: 10px;
    background: #D4EDDA;
    color: #40754C;
    padding: 10px;
    width: 80%;
    border-radius: 5px;
    
 }
    </style>

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="signup-check.php" method="post">
                    <h2>Sign Up</h2>
                

                     <?php if(isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>                    

                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="studentID" name="username" required>
                        <label for="">User Name</label>
                    </div>

                    
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password-input" required>
                        <label for="password-label" id="password-label">Password</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed"></ion-icon>
                        <input type="password" name="re_password" id="retype-password-input" required>
                        <label for="retype-password-label" id="retype-password-label">Re-enter Password</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="mail" name="email" required >
                        <label for="">Email</label>
                    </div>

               
                    </div>

                    <div class="showpassword">
                        <input type="checkbox" onclick="togglePassword()">Show Password

                    </div>

                

                    <button type="submit">Create Account</button>
                    <div class="register">
                        <a href="login.php">Already have an Account?</a>
                    </div>

                    

                </form>

            </div>

        </div>
    </section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

<script>function togglePassword() {
    var passwordInput = document.getElementById("password-input");
    var retypePasswordInput = document.getElementById("retype-password-input");
    var passwordLabel = document.getElementById("password-label");
    var retypePasswordLabel = document.getElementById("retype-password-label");

   if (passwordInput.type === "password") {
       passwordInput.type = "text";
       retypePasswordInput.type = "text";
    //    passwordLabel.innerHTML = "Password (visible)";
    //    retypePasswordLabel.innerHTML = "Re-enter Password (visible)";
   } else {
       passwordInput.type = "password";
       retypePasswordInput.type = "password";
    //    passwordLabel.innerHTML = "Password";
    //    retypePasswordLabel.innerHTML = "Re-enter Password";
   }
  }
</script>

</html>