<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form</title>
</head>

<body>


    <div class="container">
        <!--login form-->
        <div class="login-wrap active">
            <div class="title">
                <h1>Login</h1>
            </div>


            <form action="logincode.php" method="POST">

                <div class="input-area">
                    <input type="email" name="uemail" id="email" autocomplete="off" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="password" name="upassword" id="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="forgot-pass">
                    <a href="#">Forgot password ?</a>
                </div>

                <div class="button-area">
                    <button class="login-btn" type="submit" name="login">Login</button>
                </div>

                <div class="form-toggle-area">
                    <p>Not a member ? <span id="toggle-signup">Signup now</span></p>
                </div>

            </form>

        </div>

        <!--signup form-->


        <?php
        session_start();
        $message = '';
        if (isset($_SESSION['email_alert'])) {
            $message = 'User Already Exist!!';
        }

        ?>
        <div class="signup-wrap  ">
            <div class="title">
                <center>
                    <h4 class="alert">
                        <?php echo ($message); ?>
                    </h4>
                </center>
                <h1>Signup</h1>

            </div>

            <form action="signupcode.php" method="POST">

                <div class="input-area">


                    <input type="text" id="name" autocomplete="off" name="uname" required>
                    <label for="name">Name</label>
                </div>

                <div class="input-area">
                    <input type="email" id="email" autocomplete="off" name="uemail" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-area">
                    <input type="text" id="contact" name="ucontact" required>
                    <label for="contact">Contact No</label>
                </div>

                <div class="input-area">
                    <input type="password" id="password" name="upassword" required>
                    <label for="password">Password</label>
                </div>

                <div class="button-area">
                    <button class="signup-btn" name="save">Sign Up</button>
                </div>

                <div class="form-toggle-area">
                    <p>Have an account ? <span id="toggle-login">Login now</span></p>
                </div>

            </form>
            <?php unset($_SESSION['email_alert']); ?>

        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>