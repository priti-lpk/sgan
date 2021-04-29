function ContactEmail() {
    // alert("function");
    $.ajax({
        type: 'POST',
        url: 'customfile/contact_form.php',
        data: {
            name: $("#c_name").val(),
            email: $("#c_email").val(),
            subject: $("#c_subject").val(),
            message: $("#c_message").val()
        },
//        dataType: "JSON",
        success: function (data) {
            alert(""+data);
            if (data.status) {
                swal("Success!", data.msg, "success");
            } else {
                swal("Error!", data.msg, "error");
            }
        },
        fail: function () {
            swal("Error!", "Error while performing operation!", "error");
        },
        error: function (data, status, jq) {
            alert(data);
            swal("Error!", data.responseText, "error");
        }
    });
//    $.ajax({
//        type: "POST",
//        url: 'customfile/contact_form.php',
//        dataType: "html",
//       
//        cache: false,
//        success: function (Data) {
//            alert(Data);
//           
//        },
//        error: function (errorThrown) {
//            alert(errorThrown);
//            alert("There is an error with AJAX!");
//        }
//    });
}