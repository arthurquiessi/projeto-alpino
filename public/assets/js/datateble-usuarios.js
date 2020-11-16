$(document).ready(function () {
    $('#tabela-usuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "../../../src/db/ti/usuarios/listTable.php",
            "type": "POST"
        },
    });
});