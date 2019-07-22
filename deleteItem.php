<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/22/2019
 * Time: 4:24 AM
 */

$itemId =$_POST['ItemID'];
include "dbConnection.php";

if (!$connection){
    echo mysqli_connect_error();
}else{

    $SQL="delete from Item where ItemCode='$itemId'";
}
$result=mysqli_query($connection,$SQL);
if ($result){
    echo "Item Deleted";
}else{
    echo "Item Not Deleted";
    mysqli_error($connection);
}
?>