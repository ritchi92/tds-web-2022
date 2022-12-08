<?php
//include "php/jsp.php";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>loïc Théaudin</title>
		<link rel="stylesheet" href="css/site.css">
		<link rel="icon" href="image/favoricon.ico">
	</head>
	<body>
		<header>
			<div id="bouton">
				<a href="#top"><img src="image/to_top.png" alt="TOP" /></a>
			</div>
				<ul class='menu'>
					<li><a href='#acceuil'>|Acceuil|</a></li>
					<li><a href='#propos'>|A propos|</a></li>
					<li><a href='#competence'>|Compétences|</a></li>
					<li><a href='#experience'>|Expérience|</a></li>
					<li><a href='#formation'>|Formation|</a></li>
					<li><a href='#contact'>|Contact|</a></li>
				</ul>
		</header>
		<main>
		
			<h1 class='titre'>
<?php
$data=yaml_parse_file('yaml/aceuille.yaml');
//print_r($data);
echo $data["titre"];
?>
			</h1>
			<p id='acceuil'>
<?php
	echo '<p>'.$data["nomprenom"].'</p>';
	echo '<p>'.$data["accroche"].'</p>';
?>
			

			</p>
		
				<h1 class='titre'>
				propos
				</h1>
				
			<p id='propos'>
			teste
			</p>
			
				<h1 class='titre'>
<?php
$data=yaml_parse_file('yaml/compétence.yaml');
?>
				</h1>
				
			<p id='competence'>

				 <div class="container">
<?php
foreach($data AS $domaine=>$tab){
	echo '<h1 class="domaine">'.$domaine.'</h1>';
	foreach($tab AS $nom=>$niveau){
		echo '<p>'.$nom.'</p>';
		echo '<div class="progressbar-wrapper">';
		echo '<div title="css" class="progressbar" style="width:'.$niveau.'%;">'.$niveau.'%</div>';
		echo '</div>';
	}
}
?>

					 
				</div>
			
			</p>
			
				<h1 class='titre'>
					experience
				</h1>
				<p id='experience'>
				
			</p>
			
				<h1 class='titre'>
					formation
				</h1>
			<p id='formation'>
				
			</p>
			
				<h1 class='titre'>
				contact
				</h1>
			<p id='contact'>
				
				
			</p>
		
		</main>		
	</body>
</html>