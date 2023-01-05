<?php
function connect(string $dbName):PDO
{
try{
$db= new PDO("mysql:host=127.0.0.1;dbname=$dbName",'root','');
}catch (Exception $e){
	echo $e-> getMessage();
	die();
}

return $db;
}
function queryAndFetchAll(PDO $db,string $sql):array
{
	$st=$db->query($sql);
	return $st->fetchAll(PDO::FETCH_ASSOC);
}
function arrayAsHtmlTable(array $array){
	$fields=array_keys(current($array));
	echo "<table border='1'><thead>";
	echo "<tr>";
	foreach ($fields as $field){
		echo "<th>$field</th>";
	}
	echo "</tr>";
	echo "<tbody>";
	foreach ($array as $row){
		echo "<tr>";
		foreach($row as $value){
			echo"<td>$value</td>";
		}
		echo"</tr>";
	}
	echo "</tbody ";
	echo "</thead>";
	echo"</table>";
}
?>