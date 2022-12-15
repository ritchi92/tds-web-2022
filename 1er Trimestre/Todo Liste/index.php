<?php
if(!isset($_SESSION)) {
    session_start();
}
$list = $_SESSION['todolist'] ?? [];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$username=$_SESSION['username'] ?? [];
echo "<h1>$username Todo liste</h1>";
?>
<a href="connection.php" class="btn btn-dark">connection</a> 
<a href="addElement.php" class="btn btn-dark">Ajouter un élément</a>
<a href="deleteAll.php" class="btn btn-danger">Supprimer tout</a>

<ul class="list-group">
<?php
foreach ($list as $index=>$elm){
    echo "<li class='list-group-item'>$elm <a href='deleteElement.php?num=$index'>X</a></li>";
}


?>
</ul>
</body>
</html>
<?php
