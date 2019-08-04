/**
 * Passa os dados do fornecedor para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-forn').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('fornecedor');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Fornecedor #' + id);
  modal.find('#confirm').attr('href', 'delete.php?cod_forn=' + id);
})