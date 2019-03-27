<?php
require_once('../config.php');
require_once(DBAPI);

$categorias = null;
$categoria = null;

function index() {
	global $categorias;
	$categorias = find_all('categorias');
}


?>

<?php
function add() {
  if (!empty($_POST['categoria'])) {
    
    $categoria = $_POST['categoria'];
    
    save('categorias', $categoria);
    header('location: index.php');
  }
}
?>

<?php

function edit() {
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['categoria'])) {
      $categoria = $_POST['categoria'];
      
      update('categorias', $id, $categoria);
      header('location: index.php');
    } else {
      global $categoria;
      $categoria = find('categorias', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>
<?php

function view($id = null) {
  global $categoria;
  $categoria = find('categorias', $id);
}
?>
<?php

function delete($id = null) {
  global $categoria;
  $categoria = remove('categorias', $id);
  header('location: index.php');
}
