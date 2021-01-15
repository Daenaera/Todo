<?php
/*
  $stato1 = "Da fare";
  $stato2 = "Completato";

if(isset($_GET['edit']) && $row['stato'] == $stato1){
  $id = $_GET['edit'];
  $stato2 = "Completato";
  $sql = "UPDATE posts SET stato='{$stato2}' WHERE id='{$id}'";
  $stmt = $pdo_conn->prepare($sql);
  $stmt->execute(); 

}

if(isset($_GET['edit'])&& $row['stato'] == $stato2){
  $id = $_GET['edit'];
  $stato1 = "Da fare";
  $sql = "UPDATE posts SET stato='{$stato1}' WHERE id='{$id}'";
  $stmt = $pdo_conn->prepare($sql);
  $stmt->execute(); 
} 
?>

<?php
require_once("db.php");
$pdo_statement=$pdo_conn->prepare("update posts set stato='{$stato2}' where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php'); */
?> 

<?php
/*
  require_once("db.php");
  if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    if ($row['stato'] == "Da fare" || $row['stato'] == "Completato") {
      $nuovoStato = $row['stato'] == "Da fare" ? "Completato" : "Da fare";
      $sql = "UPDATE posts SET stato = '{$nuovoStato}' WHERE id = '{$id}'";
      $stmt = $pdo_conn->prepare($sql);
      $stmt->execute();
    }
  }

  */

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $stato2 = "Completato";
    $sql = "UPDATE posts SET stato='{$stato2}' WHERE id='{$id}'";
    $stmt = $pdo_conn->prepare($sql);
    $stmt->execute();
    header('location:index.php');
  }
?>