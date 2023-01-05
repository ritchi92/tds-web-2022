<?php
require 'database.php';
$sql=$_POST['sql']??'show tables;';
?>

<form method="post">
	<textarea name="sql" rows="10"><?=$sql?></textarea>
	<br>
	<button type ="submit">Exécuter </button>
</form>
<hr>
<?php
$db=connect('classicmodels');
$allValues=queryAndFetchAll($db,$sql);
ArrayAsHtmlTable($allValues);
