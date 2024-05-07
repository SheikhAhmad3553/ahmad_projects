<?php
include ('inc/helper.php');



if (isset($_POST['submit'])) {
    $nicename    = $_POST['nicename'];
    $password = $_POST['password'];

    //$conn = mysqli_connect("localhost", "root", "", "rental");
    $query = "SELECT * FROM tbl_users WHERE nicename = '$nicename' && password ='$password'";
    

    $data = mysqli_query($conn, $query); 
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        $_SESSION['nicename'] = $nicename; 
        header('location: property-detail.php?msg=ok');
        exit();
    } else {
        echo header('location: login.php?msg=not-ok');
        exit;
    }
}
?>
            <?php
            // logout session-end
            if (isset($_POST['logout_btn'])) {
                session_destroy();
                unset($_SESSION['auth']);
                unset($_SESSION['auth_user']);
                $_SESSION['status'] = "You are now logged out";
                 header("Location: {$_SERVER['HTTP_REFERER']}");
                exit;
            }
            ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="registration">
            <h2>Homey-Login</h2>
            <form id="register" method="POST" action="login.php">
                <label for="">Nicename</label>
                <br>
                <input type="text" name="nicename" id="name" placeholder="Enter Your Username">
                <br><br>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter Password">
                <br><br><br>

                <input type="submit" name="submit" id="submit" value="Login">

                <section class="signup">New Member? <a href="register.php" class="link"> Sign Up</section>



            </form>
        </div><!-----end register-->
    </div><!-----end main-->
</body>



</html>