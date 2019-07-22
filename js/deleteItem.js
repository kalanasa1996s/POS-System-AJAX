$("#delete").click(function () {
    var ItemFromData=$("#itemForm").serialize();

    $.ajax({
        url:"deleteItem.php",
        method:"POST",
        async:true,
        data:ItemFromData

    }).done(function (res) {
        alert(res);
        clearAll();
    })
});


