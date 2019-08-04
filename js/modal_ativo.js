/**
 * Passa os dados do ativo para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-ativo').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var cod = button.data('ativo');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Ativo #' + cod);
    modal.find('#confirm').attr('href', 'delete.php?n_etiqueta=' + cod);
})
