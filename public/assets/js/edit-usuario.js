$('#editar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var ip = button.data('ip')
    var usuario = button.data('usuario')
    var setor = button.data('setor')
    var home = button.data('home')
    var modal = $(this)

    modal.find('.modal-title').text('Editar usuário: ' + usuario)
    modal.find('#ip').val(ip)
    modal.find('#usuario').val(usuario)
    modal.find('#setor').val(setor)
    modal.find('#home').val(home)
})