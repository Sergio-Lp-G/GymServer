console.log("enlazado");

$(document).ready(function(e) {
    //e.preventDefault();

    $('#buscarActividad').click(function(e) {

        console.log("ha hecho click");
        data = $('#selectActividades').val();
        console.log(data);

        $.ajax({
            url: "/activities/busqueda",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

            data: {
                _token: $('#token').val(),
                filter: data
            },

            type: 'GET',

            dataType: 'text',

            success: function(response) {
                console.log(response);
                $('#destinoActividades').html(response);
            },

            error: function(xhr, status) {
                alert('Disculpe, existió un problema');
            },

        });

    });

    $('#buscarSesiones').click(function(e) {

        console.log("ha hecho click");
        data = $('#sesions').val();
        console.log(data);

        $.ajax({
            url: "/activities/filter",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

            data: {
                _token: $('#token').val(),
                filter: JSON.parse(data)
            },

            type: 'POST',

            dataType: 'text',

            success: function(response) {
                alert('Petición de búsqueda de sesiones realizada correctamente')
                $('#destinofiltro').html(response);
            },

            error: function(xhr, status) {
                alert('Disculpe, existió un problema');
            },

        });

    });

});

function grabar(data) {
    //recorrer el data y grabar en una tabla html
}