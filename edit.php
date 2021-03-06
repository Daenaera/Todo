
    <?php
require_once("db.php");
if(!empty($_POST["save_record"])) {
    $titolo = $_POST['titolo'];
    $descrizione = $_POST['descrizione'];
    $data = $_POST['data'];
    $id = $_GET['id'];

    $sql = "UPDATE posts SET titolo='{$titolo}', descrizione='{$descrizione}', data='{$data}' WHERE id='{$id}'";
    $pdo_statement = $pdo_conn->prepare($sql);
	//$pdo_statement=$pdo_conn->prepare("update posts set titolo='" . $_POST[ 'titolo' ] . "', descrizione='" . $_POST[ 'descrizione' ]. "', data='" . $_POST[ 'data' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
        header('location:index.php');
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>



<html>
<head>
<title>Modifica posts</title>


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

    <form method="post" action="edit.php?id=<?php echo $result[0]['id']; ?>">
    <h1>Modifica posts</h1>

            <label for="validationCustom01" class="form-label">posts</label>
            <input type="text" name="titolo" class="form-control" value="<?php echo $result[0]['titolo']; ?>" required  />

 

            <label for="validationCustom01" class="form-label">Descrizione</label>
            <textarea name="descrizione" class="form-control" rows="2"><?php echo $result[0]['descrizione']; ?></textarea>


            <label for="validationCustom01" class="form-label">Data</label>
            <input type="date" name="data" class="form-control" value="<?php echo $result[0]['data']; ?>" required />

            <button class="btn btn-primary mt-3" name="save_record" type="submit" value="Save" id="submit">Modifica</button>

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
