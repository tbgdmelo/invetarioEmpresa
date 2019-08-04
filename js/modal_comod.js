/**
 * Passa os dados do comodato para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-comod').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var cod = button.data('comodato');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Comodato #' + cod);
    modal.find('#confirm').attr('href', 'delete.php?cod_comod=' + cod);
})
