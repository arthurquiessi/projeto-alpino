$('#editar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var tag = button.data('tag')
    var modelo = button.data('modelo')
    var tipo = button.data('tipo')
    var processador = button.data('processador')
    var memoria = button.data('memoria')
    var armazenamento = button.data('armazenamento')
    var tipo_armazenamento = button.data('tipo_armazenamento')
    var sistema_operacional = button.data('sistema_operacional')
    var nfcompra = button.data('nfcompra')
    var datacompra = button.data('datacompra')
    var distribuidora = button.data('distribuidora')
    var nfgarantia = button.data('nfgarantia')
    var datagarantia = button.data('datagarantia')
    var statusmaq = button.data('statusmaq')
    var modal = $(this)

    modal.find('.modal-title').text('Editar máquina TAG: ' + tag)
    modal.find('#id').val(id)
    modal.find('#tag').val(tag)
    modal.find('#modelo').val(modelo)
    modal.find('#tipo').val(tipo)
    modal.find('#processador').val(processador)
    modal.find('#memoria').val(memoria)
    modal.find('#armazenamento').val(armazenamento)
    modal.find('#tipo_armazenamento').val(tipo_armazenamento)
    modal.find('#sistema_operacional').val(sistema_operacional)
    modal.find('#nfcompra').val(nfcompra)
    modal.find('#datacompra').val(datacompra)
    modal.find('#distribuidora').val(distribuidora)
    modal.find('#nfgarantia').val(nfgarantia)
    modal.find('#datagarantia').val(datagarantia)
    modal.find('#statusmaq').val(statusmaq)
})