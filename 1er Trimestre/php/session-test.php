<?php
session_start()
?>
<form method="get">
	<input type="text" name="variable">
</form>
<?php
if(isset($_POST['variable'])){
	$_SESSION['value']=$_POST['variable'];
	var_dump($_SESSION);

}