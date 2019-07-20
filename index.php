<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/17/2019
 * Time: 7:44 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="css/index.css">


</head>

<h4>  <a href="pages/dashbord.php" >kalan </a> </h4>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- login start -->


<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p> Capital Z POS System</p>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h3 class="register-heading">Login</h3>
                    <div class="row register-form">
                        <div class="col-md-12 profile_card">
                            <form class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="text" class="form-control" placeholder="Email" value="" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                    <h3 class="register-heading">New User</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="float-right">
                                <input type="submit" class="btn btn-primary" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>