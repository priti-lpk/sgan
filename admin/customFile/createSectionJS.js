function addSection() {
    var cid = $("#class_id").val();
    $.ajax({
        type: "POST",
        url: "customFile/createSectionPro.php",
        enctype: 'multipart/form-data',
        data: {
            section_name: $("#section_name").val(),
            class_id: $("#class_id").val(),
            action: "add"
        },
        dataType: "json",
        success: function (data) {
          //  alert(cid);
//            getoldClass(cid);
            getSection();
            $('#addsection').modal('toggle');
            if (data.status) {
                swal("Success!", data.msg, "success");
            } else {
                swal("Error!", data.msg, "error");
            }
            $('#addsection').find('input:text').val('');

        },
        fail: function () {
            $('#addsection').modal('toggle');
            swal("Error!", "Error while performing operation!", "error");
        },
        error: function (data, status, jq) {
            $('#addsection').modal('toggle');
            swal("Error!", data.responseText, "error");
        }
    });
}


