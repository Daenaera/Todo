

<?php
require_once("db.php");
?>


<html>
<head>
<title>TO DO LIST</title>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</head>
<body>


<?php 

 include("footertop.html");
?>


<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>




<div class="d-flex justify-content-center mt-5 mb-2 p-4" style="align:center">
 <a class="btn btn-primary" href="add.php">Aggiungi un Task <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
</svg></a>
</div>


<div class="col-12 row justify-content-center">

	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>



<div class="col-lg-3 m-2 col-sm-5">
<div class="card border-2 border-primary">
  <div class="card-header" style="background-color: #0dcaf0">

  <h5 > <?php echo $row["post_title"];  ?></h5>
  </div>
  <div class="card-body" >
	<h6 class="card-subtitle mb-2 text-muted"><?php echo $row["post_at" ]; ?></h6>
    <p class="card-text"><?php echo $row["description"]; ?></p>

    <a class="mt-1 btn btn-warning" href='edit.php?id=<?php echo $row['id']; ?>'>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg>Edit</a>

    <a class="mt-1 btn btn-danger" href='delete.php?id=<?php echo $row['id']; ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Delete</a>



<?php 


 include("cambiostato.php");

?>


<a class='mt-1 btn btn-primary' href='index.php?edit=<?php echo $row['id']; ?>'><?php echo $row['stato']; ?></a></button>




  </div>
  
</div>


</div>

<?php
		}
	}
	?>

<div class="col-12 m-4"></div>

<?php 

 include("footer.html");
?>


</body>
</html>
