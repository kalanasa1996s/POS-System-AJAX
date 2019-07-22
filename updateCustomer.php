<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/21/2019
 * Time: 9:35 PM
 */

$fname = $_POST['txtFirstName'];
$lname = $_POST['txtLastName'];
$cusid = $_POST['cusID'];
$address = $_POST['address'];
$nic = $_POST['nic'];
$phoneno = $_POST['phoneNO'];

include 'dbConnection.php';
if (!$connection){
    mysqli_connect_error();
}else{
    $SQL="UPDATE customer set FirstName='$fname', LastNamee='$lname',Address='$address',nic='$nic',Tell='$phoneno' where CID='$cusid'";

}
$result=mysqli_error($connection,$SQL);
if ($result){
    echo "Update Sucess";

}else{
    mysqli_error($connection);
    echo "update Failed";
}