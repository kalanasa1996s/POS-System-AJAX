<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/22/2019
 * Time: 12:12 PM
 */
?>

<?php
$CustomerId = "000";
$CustomerName = "Ashen";
$CustomerSalary = "500";
$CustomerAddress = "galle";

$ItemCode = "I000";
$ItemName = "Lux";
$price = "25";
$qty = "5";

include 'dbConnection.php';
if (!$connection) {
    echo mysqli_connect_error();
} else {

    $CustomerSql = "insert into customer values('$CustomerId','$CustomerName','$CustomerSalary','$CustomerAddress')";
    mysqli_autocommit($connection, "false");
    $CustomerRst = mysqli_query($connection, $CustomerSql);
    if ($CustomerSql) {
        $itemSql = "insert into item values('$ItemCode','$ItemName','$price','$qty')";
        $ItemRst = mysqli_query($connection, $itemSql);
        if ($itemSql) {
            mysqli_commit($connection);
            echo "Item Add";
        } else {
            mysqli_rollback($connection);
            echo "Item Not Add", mysqli_error($connection);
        }
    } else {
        mysqli_rollback($connection);
        echo "Customer Not Add", mysqli_error($connection);;
    }
    mysqli_autocommit($connection, "true");
    mysqli_close($connection);

}
?>
