$("#add").click(function () {
    var cusFromData=$("#customerForm").serialize();

    $.ajax({
        url:"saveCustomer.php",
        method:"POST",
        async:true,
        data:cusFromData

    }).done(function (res) {
        alert(res);
    })
});