<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/21/2019
 * Time: 8:24 PM
 */

$cusid =$_POST['cusID'];
include "dbConnection.php";

if (!$connection){
    echo mysqli_connect_error();
}else{

    $SQL="delete from Customer where CID='$cusid'";
}
$result=mysqli_query($connection,$SQL);
if ($result){
    echo "Customer Deleted";
}else{
    echo "Customer Not Deleted";
    mysqli_error($connection);
}
?>

