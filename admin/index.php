<?php
include 'essentials.php';
include 'db_config.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php
    include 'links.php';
    ?>
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin-name" required type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin-pass" required type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
    include_once 'db_config.php';

    if (isset($_POST['login'])) {

        $admin_name = $_POST['admin-name'];
        $admin_pass = $_POST['admin-pass'];
        $frm_data = '';

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$admin_name, $admin_pass];
        $res = select($query, $values, "ss");

        $res = select($query, $values, "ss");

        if ($res->num_rows == 1) {

            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        } else {
            echo "<script>alert('Login failed-Invalid Credentials!');</script>";

        }
    }
    //to read data
    //print_r($frm_data);
    
    // Query to retrieve data from the database
    // $query = "SELECT * FROM admin_cred";
    
    // // Execute the query
    // $result = mysqli_query($con, $query);
    
    // // Check if the query was successful
    // if (!$result) {
    //     die('Error in the query: ' . mysqli_error($conn));
    // }
    // while ($row = mysqli_fetch_assoc($result)) {
    
    //     $column1 = $row['admin_name'];
    //     $column2 = $row['admin_pass'];
    
    //     echo "Name" . $column1 . "<br>";
    //     echo "password " . $column2 . "<br>";
    //     echo "<br>";
    // }
    
    // // Free up the result set
    // mysqli_free_result($result);
    
    // // Close the database connection
    // mysqli_close($conn);
    ?>
    <?php
    include 'scripts.php';
    ?>
</body>

</html>