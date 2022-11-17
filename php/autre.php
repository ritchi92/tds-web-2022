<?php
	session_start();
	$res='non connecté';
	if(isset($_SESSION['user'])){
	$res="vous êtes".$_SESSION['user'];
	$re.=$res."<a href=deco.php>déconnexion</a>";
	
}
echo $res;