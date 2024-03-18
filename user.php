<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
     // Getting username/ email and password
    $username=$_POST['username'];
    $userPassword=$_POST['userPassword'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT username,userPassword FROM tbuser WHERE (username='$username' AND userPassword='$userPassword')");
$num=mysqli_fetch_array($sql);
if($num>0)
{
    echo "<script>alert('Succesfull.');</script>"; 
    header('location: dashboard.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            


        <!-- App title -->
        <title>BJS TECH THE NEWS WORLD | User Panel</title>

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
                                        <a href="index.html" class="text-success">
                                            <span><img src="admin/assets/images/logo.png" alt="" height="100" whigh="60"  ></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="userPassword" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>
                    
                                        <div class="form-group account-btn text-right m-t-10">
                                            <div class="col-xs-9">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"  type="submit" name="login">Log In</button>
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-9">
                                             <a    href="signup.php" class="btn w-md btn-bordered btn-danger waves-effect waves-light"> Sign Up</a>
                                               
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