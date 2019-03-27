/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('usuario');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Cliente #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})


$('#delete-produto').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('produto');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Produto #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-categoria').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('categoria');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Categoria #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})