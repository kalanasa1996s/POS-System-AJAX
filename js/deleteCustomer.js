$('#delete').click(function () {
    var customerDataDelete=$('#customerForm').serialize();

    $.ajax({
        url:"deleteCustomer.php",
        method:"POST",
        async:true,
        data:customerDataDelete
    }).done(function (rep) {
        alert(rep);
    })

});

