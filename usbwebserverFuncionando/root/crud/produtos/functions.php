<?php
require_once('../config.php');
require_once(DBAPI);

$produtos = null;
$produto = null;

function index() {
	global $produtos;
	$produtos = find_all('produtos');
}


?>

<?php
function add() {
  if (!empty($_POST['produto'])) {
    
    $produto = $_POST['produto'];
    
    save('produtos', $produto);
    header('location: index.php');
  }
}
?>

<?php

function edit() {
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['produto'])) {
      $produto = $_POST['produto'];
      
      update('produtos', $id, $produto);
      header('location: index.php');
    } else {
      global $produto;
      $produto = find('produtos', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>
<?php

function view($id = null) {
  global $produto;
  $produto = find('produtos', $id);
}
?>
<?php

function delete($id = null) {
  global $produto;
  $produto = remove('produtos', $id);
  header('location: index.php');
}
