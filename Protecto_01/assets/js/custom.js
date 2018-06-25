$(document).ready(function () {

    var site_url = "http://localhost/Protecto_01/index.php/";

    $("#bt_login").click(function (e) {

        e.preventDefault();
       
        var rut = $("#rut_login").val();
        var clave = $("#clave_login").val();

        $.ajax({
            url: site_url + 'login',
            type: 'POST',
            dataType: 'json',
            data: {rut: rut, clave: clave},
            success: function (o) {

                if (o.msg === "0") {
                    Materialize.toast("No existe D:", "4000", "yellow");
                } else {
                    location.href = site_url + o.msg;
                }

            },

            error: function () {

                Materialize.toast("Error 500", "4000", "yellow");
            }
        }


        );

    });


});