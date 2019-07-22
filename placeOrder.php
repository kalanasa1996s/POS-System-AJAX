<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/17/2019
 * Time: 9:41 AM
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


    <script src="https://kit.fontawesome.com/7802c5be07.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/Dashbord.css">
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar  open-->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">POS SYSTEM</div>
        <div class="list-group list-group-flush">
            <a href="pages/dashbord.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="customer.php" class="list-group-item list-group-item-action bg-light">Customer</a>
            <a href="item.php" class="list-group-item list-group-item-action bg-light">Item</a>
            <a href="placeOrder.php" class="list-group-item list-group-item-action bg-light">Order</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper end -->

    <!--    ////////////////////////////////////////////////////////////////////////////body start////////////////////////////////////////////-->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Messages
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Messages</a>
                            <a class="dropdown-item" href="#">Sent Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">New Message</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--//////////////////////////////////////////////////////body 01//////////////////////////////////////////////////////////////-->

        <div class="container-fluid">

            <div class="m_content">
<!--                <div class="card-header">-->
<!--                    <h3>Place Order</h3>-->
<!--                </div>-->
                <div class="m_card">
                    <form id="order_form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>OrderID</label>
                                <input type="text" id="oid" class="form-control" placeholder="First Name" name="oid


                            <div class="form-group col-md-6" >
                                <label>Select Customer</label>
                                <select id="custID"  class="form-control" name="cid">
                                    <option selected>Choose Customer...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Select Item</label>
                                <select id="item"  class="form-control" name="item">
                                    <option selected>Choose...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>ItemName</label>
                                <input id="itemName" type="text" class="form-control" disabled placeholder="ItemName" name="itemName">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Avilable Qty</label>
                                <input id="avalableqty" type="text" disabled class="form-control" placeholder="Qty" name="avalableqty">
                            </div>
                            <div class="form-group col">
                                <label>Unit Price</label>
                                <input id="price" type="text" class="form-control" placeholder="Price" name="price" disabled>
                            </div>
                            <div class="form-group col">
                                <label>Buying Qty</label>
                                <input id="bQty" type="text" class="form-control" placeholder="Qty" name="bQty">
                            </div>
                            <div class="form-group col-12">

                                <button type="button" class="btn btn-primary" id="addToCart"> Add To Cart</button>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ItemCode</th>
                                <th scope="col">ItemName</th>
                                <th scope="col">Qty</th>
                                <th scope="col">UnitPrice</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Total</label>
                                <input id="total" type="text" class="form-control" placeholder="Price" disabled>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="button" id="confrm" class="btn btn-primary float-right">Confirm Order</button>
                        </div>
                    </form>
                </div>


        </div>


        </div>

        <!--        //////////////////////////////////////////////////////body 01//////////////////////////////////////////////////////////////-->

    </div>
    <!-- /#page-content-wrapper -->

</div>

<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="../js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lord.js"></script>
<script src="js/dataJS.js"></script>


<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


</body>
</html>