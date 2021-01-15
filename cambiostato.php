

<?php

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $stato2 = "Completato";
    $sql = "UPDATE posts SET stato='{$stato2}' WHERE id='{$id}'";
    $stmt = $pdo_conn->prepare($sql);
    $stmt->execute();
    header('location:index.php');
  }
?>
