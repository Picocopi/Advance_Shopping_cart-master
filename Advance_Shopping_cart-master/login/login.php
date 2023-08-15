<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-8"  />
    <link rel="stylesheet" href="logstyle.css" />




    <title>ILLEGEAR log in page</title>

</head>
<body>


    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="loginSystem.php" method="post">
                    <h2>Login</h2>
                    <?php if(isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    
                    
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="username">User Name</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="showpassword">
                        <input type="checkbox" onclick="togglePassword()">Show Password

                    </div>
                    <!-- <div class="forget">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Password?</a>
                    </div> -->
                    <button>Log in</button>
                    <div class="register">
                        <p>
                            Don't have a account? <a href="signup.php">Register</a>
                        </p>
                    </div>
                    
                </form>

            </div>

        </div>
    </section>


 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>