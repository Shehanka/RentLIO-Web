/**
 * AJAX SCRIPTS
 * */
let btnAddAdmin = $('#btnAddAdmin');
/*
btnAddAdmin.click(function () {
    let data = $('#form-add-admin:input').serializeArray();
    $.post($('#form-add-admin').attr("action"), data, function (info) {
        if (info === 'Added'){
            console.log(info);
            UIkit.notification({message: 'Admin has been successfully added!'});
        }else {
            UIkit.notification({message: 'Failed to add admin!'});
        }
    });
});

btnAddAdmin.submit(function () {
    return false;
});*/

btnAddAdmin.click(function () {
    let name = $('name');

    $.ajax({
        type : 'POST',
        // data : ();
    })
});