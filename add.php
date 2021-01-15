

<?php
if(!empty($_POST["add_record"])) {
	require_once("db.php");
	$sql = "INSERT INTO posts ( post_title, description, post_at, stato ) VALUES ( :post_title, :description, :post_at, :stato )";
	$pdo_statement = $pdo_conn->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':post_title'=>$_POST['post_title'], ':description'=>$_POST['description'], ':post_at'=>$_POST['post_at'], ':stato'=>"Da fare" ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}
?>



<html>
<head>
<title>Aggiungi Task</title>


 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

<?php 

 include("footertop.html");
?>

<div class="d-flex justify-content-center mt-5 mb-2 p-4" style="align:center">
 <a class="btn btn-primary" href="index.php">Torna alla lista <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg></a>
</div>


<div class="col-12 row justify-content-center">
<div class="col-lg-6">
<div class="card border-2 border-primary p-4">


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <h1>Nuovo Task</h1>

            <label for="validationCustom01" class="form-label">Task</label>
            <input type="text" class="form-control" id="post_title" name="post_title" value="" required>



            <label for="validationCustom01" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" value=""></textarea>


            <label for="validationCustom01" class="form-label">Data</label>
            <input type="date" class="form-control" id="post_at" name="post_at" value="" required>


            <button class="btn btn-primary mt-3" name="add_record" type="submit" value="Add" id="submit">Invia</button>

    </form>

</div>
</div>




    <?php 

 include("footer.html");
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>