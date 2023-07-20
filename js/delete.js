function showConfirmModal(id) {
  document.getElementById('deleteLink').href = 'delete.php?id=' + id;

  $('#confirmModal').modal('show');
}