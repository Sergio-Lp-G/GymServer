console.log("enlazado");

$('#buscar').click(function(e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#id').val();
    console.log(data);

    $.ajax({
        url: "/activities/filter",

        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

        data: {
            _token: $('#token').val(),
            filter: data
        },

        type: 'POST',

        dataType: 'text',

        success: function(response) {
            console.log(response);
            $('#destinofiltro').html(response);
        },

        error: function(xhr, status) {
            alert('Disculpe, existió un problema');
        },

    });

    // $.get("/activities/" + data + "/filter?filter=" + data, function(data, status) {
    //     // console.log("Data: " + data + "\nStatus: " + status);
    //     console.log(data);
    //     $('#destinofiltro').html(data);
    // });
})

function grabar(data) {
    //recorrer el data y grabar en una tabla html
}