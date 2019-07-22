
$('#update').click(function () {
    var customerDataUpdate=$('#customerForm').serialize();
    $.ajax({
        url:"updateCustomer.php",
        method:"POST",
        async: true,
        data: customerDataUpdate
    }).done(function (rep) {
        alert(rep);
    })
});