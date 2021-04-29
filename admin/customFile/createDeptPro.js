function addDept() {
    
    $.ajax({
        type: "POST",
        url: "customFile/createDeptPro.php",
        enctype: 'multipart/form-data',
        data: {
            dep_name: $("#dep_name").val(),
            action: "add"
        },
        dataType: "json",
        success: function (data) {
            getAlbum();
            $('#adddept').modal('toggle');
            if (data.status) {
                swal("Success!", data.msg, "success");
            } else {
                swal("Error!", data.msg, "error");
            }
             $('#addept').find('input:text').val('');
//            $("#additem").modal("show");
//            $("#category_list").val($("#category_name").val());
        },
        fail: function () {
            $('#adddept').modal('toggle');
            swal("Error!", "Error while performing operation!", "error");
        },
        error: function (data, status, jq) {
            $('#adddept').modal('toggle');
            swal("Error!", data.responseText, "error");
        }
    });
}


