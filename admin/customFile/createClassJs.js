function addClass() {
    
    $.ajax({
        type: "POST",
        url: "customFile/createClassPro.php",
        enctype: 'multipart/form-data',
        data: {
            class_name: $("#class_name").val(),
            action: "add"
        },
        dataType: "json",
        success: function (data) {
            getClass();
            $('#addclass').modal('toggle');
            if (data.status) {
                swal("Success!", data.msg, "success");
            } else {
                swal("Error!", data.msg, "error");
            }
             $('#addclass').find('input:text').val('');

        },
        fail: function () {
            $('#addclass').modal('toggle');
            swal("Error!", "Error while performing operation!", "error");
        },
        error: function (data, status, jq) {
            $('#addclass').modal('toggle');
            swal("Error!", data.responseText, "error");
        }
    });
}


