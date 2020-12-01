$('#editar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var ip = button.data('ip')
    var ramal = button.data('ramal')
    var modelo_ramal = button.data('modelo_ramal')
    var modal = $(this)

    modal.find('.modal-title').text('Editar usuário: ' + ramal)
    modal.find('#ip').val(ip)
    modal.find('#ramal').val(ramal)
    modal.find('#modelo_ramal').val(modelo_ramal)
})