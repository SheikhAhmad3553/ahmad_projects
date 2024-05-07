<?php
include 'inc/head.php';
if (isset($_POST['register_btn'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $register_query="INSERT INTO tbl_users(fname,lname,nicename,password,email) VALUES('$fname','$lname','$nicename','$password','$email') ";
  $register_query_run=mysqli_query($conn,$register_query);

  if($register_query_run)
  {
      $_SESSION['status']='You are registered successfully';
      $_SESSION['status_code']='success';
      header('location:login.php');
  }
  else
  {
      $_SESSION['status']='Not Able To Register';
      $_SESSION['status_code']='error';
      header('location:register.php');
  }

}
?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Get homey Registrion-page</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="css/style.css" />

  


  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0" style="    margin-bottom: 60px;">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0" >
                      <a class="w-auto pl-0" href="index.php">
                      <img src="img/logo.png" width="128" height="30" alt="Homy">
                       
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">

                    

                    <form action="register.php" method="POST">
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" name="fname" class="form-control input-lg" id="name" aria-describedby="nameHelp"
                            placeholder="firstname">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" name="lname" class="form-control input-lg" id="name" aria-describedby="nameHelp"
                            placeholder="lastname">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" name="nicename" class="form-control input-lg" id="name" aria-describedby="nameHelp"
                            placeholder="nicename">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                        </div>
                      
                        <div class="form-group col-md-12 mb-4">
                          <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp"
                            placeholder="email">
                        </div>
                        
                        <div class="col-md-12">

                          <div class="d-flex justify-content-between mb-3">

                           

                          </div>

                          <button name="register_btn" type="submit" class="btn btn-primary btn-pill mb-4">Register</button>

                          <p class="float-end">
                            <a class="text-blue" href="/large-scale-php-project-26-april%20(1)/large-scale-php-project/login%20.php">Login</a>
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>