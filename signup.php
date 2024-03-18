<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['signup']))
  {
 
    // Getting username/ email and password
     $username=$_POST['username'];
    $useremail=$_POST['useremail'];
    $userPassword=$_POST['userPassword'];
    $phonenumber=$_POST['phonenumber'];
    $userAddress=$_POST['userAddress'];
    $confirmpassword=$_POST['confirmpassword'];
    
    if($_POST['userPassword'] != $_POST['confirmpassword']){
    echo "<script>alert('Wrong Password');</script>";
    }    
        
    // Fetch data from database on the basis of username/email and password
$sql = "INSERT INTO tbuser(username,useremail,userPassword,phonenumber,userAddress) VALUES('$username','$useremail','$userPassword','$phonenumber','$userAddress')";
$i = mysqli_query($con,$sql);
if($i == 1)
{
    echo "<script>alert('Record Save');</script>";
    header('location: user.php');
}
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           


        <!-- App title -->
        <title>BJS TECH THE NEWS WORLD | Sign Up</title>

        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="signup.html" class="text-success">
                                            <span><img src="admin/assets/images/logo.png" alt="" height="100" whigh="60"  ></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="User Name" autocomplete="off">
                                            </div>
                                        </div>
   
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email" required="" name="useremail" placeholder="Email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="userPassword" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="confirmpassword" required="" placeholder="confirmPassword" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="phonenumber" placeholder="Phone numebr" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="userAddress" placeholder="Address" autocomplete="off">
                                            </div>
                                        </div>
                          
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" href="user.php" type="submit" name="signup">Sign Up</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/bootstrap.min.js"></script>
        <script src="admin/assets/js/detect.js"></script>
        <script src="admin/assets/js/fastclick.js"></script>
        <script src="admin/assets/js/jquery.blockUI.js"></script>
        <script src="admin/assets/js/waves.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.js"></script>
        <script src="admin/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/jquery.core.js"></script>
        <script src="admin/assets/js/jquery.app.js"></script>

    </body>
</html>