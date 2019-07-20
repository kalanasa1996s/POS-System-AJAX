<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/19/2019
 * Time: 8:50 PM
 */
?>

<?php

$fname = $_POST['txtFirstName'];
$lname = $_POST['txtLastName'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$cusid = $_POST['cusID'];
$phoneno = $_POST['phoneNO'];

include 'dbConnection.php';

if (!$connection) {

    echo mysqli_connect_error();
} else {

    $SQL = "insert into customer values ('$fname',
                                          '$lname',
                                          '$nic',
                                          '$address',
                                          '$cusid',
                                          '$phoneno')";
   $result =mysqli_query($connection,$SQL);
   if ($result){

       echo "Customer Hasbeen Added";
   }else{

       echo "Customer Not Added";
       mysqli_error( $connection);
   }


}


?>

