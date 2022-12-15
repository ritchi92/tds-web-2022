<?php

$message=$_GET ['msg']??"bonjours!";
$max=$_GET['nb']??5;
$color=$_GET['color']??'white';
$bgcolor=$_GET['bgcolor']??'black';

?>
<form method="get" action="variable.php">
	<input type="text" name="msg">
	<input type="number" value="1"max="6" min="1" name="nb">
	<input type="color" name="color">
	<input type="color" name="bgcolor">
	<button type ="submit">Valider </button>
</form>

<?php
foreach(range(1,$max)as $number){
    echo "<h$number>$message</h$number>";
	echo"<h$number style ='color: $color;background-color:$bgcolor'>
	$message</h$number>";
}
?>