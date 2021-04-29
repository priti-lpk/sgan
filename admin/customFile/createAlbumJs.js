function addAlbum() {

    $.ajax({
        type: "POST",
        url: "customFile/createAlbumPro.php",
        enctype: 'multipart/form-data',
        data: {
            album_name: $("#album_name").val(),
            year_id: $("#year_id").val(),
            action: "add"
        },
        dataType: "json",
        success: function (data) {
            getAlbum();
            $('#addalbum').modal('toggle');
            if (data.status) {
                swal("Success!", data.msg, "success");
            } else {
                swal("Error!", data.msg, "error");
            }
            $('#addalbum').find('input:text').val('');
//            $("#additem").modal("show");
//            $("#category_list").val($("#category_name").val());
        },
        fail: function () {
            $('#addalbum').modal('toggle');
            swal("Error!", "Error while performing operation!", "error");
        },
        error: function (data, status, jq) {
            $('#addalbum').modal('toggle');
            swal("Error!", data.responseText, "error");
        }
    });
}


