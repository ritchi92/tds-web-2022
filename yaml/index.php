<?php 
$data=yaml_parse_file("test.yaml");
echo"<p>".$data["lastname"]." ".$data["firstname"]."</p>";
echo "<p>".$data["menu"][0]."</p>";
echo '<img src="'.$data["image"].'" />';
?>