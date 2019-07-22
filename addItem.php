<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/22/2019
 * Time: 3:53 AM
 */

$itemCode = $_POST['ItemID'];
$itemName = $_POST['name'];
$itemBrand = $_POST['qty'];
$unitPrice = $_POST['cprice'];
$qty = $_POST['sprice'];


include 'dbConnection.php';

if (!$connection) {

    echo mysqli_connect_error();
} else {

    $SQL = "insert into item values ('$itemCode',
                                          '$itemName',
                                          '$itemBrand',
                                          '$unitPrice',
                                          '$qty')";
    $result =mysqli_query($connection,$SQL);
    if ($result){

        echo "Item Hasbeen Added";
    }else{

        echo "Item Not Added";
        mysqli_error( $connection);
    }


}

?>