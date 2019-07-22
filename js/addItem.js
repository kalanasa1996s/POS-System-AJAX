$("#add").click(function () {
    var ItemFromData=$("#itemForm").serialize();

    $.ajax({
        url:"addItem.php",
        method:"POST",
        async:true,
        data:ItemFromData

    }).done(function (res) {
        alert(res);
        clearAll();
    })
});


