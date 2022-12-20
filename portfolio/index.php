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
					<li><a href='#acceuil'>|Accueil|</a></li>
					<li><a href='#propos'>|A propos|</a></li>
					<li><a href='#competence'>|Compétences|</a></li>
					<li><a href='#experience'>|Expérience|</a></li>
					<li><a href='#formation'>|Formation|</a></li>
					<li><a href='#contact'>|Contact|</a></li>
				</ul>
		</header>
		<main>
	<div class='backgroundacceuil'>
		<h1 class='titre'>
			<?php
			$data=yaml_parse_file('yaml/aceuille.yaml');
			//print_r($data);
			echo $data["titre"];
			?>
		</h1>
			<span id='acceuil'>

				<?php
					echo '<p>'.$data["nomprenom"].'</p>';
					echo '<p>'.$data["accroche"].'</p>';
				?>
				<img id='moi' src="image\presentation.jpg" >
			</span>
	</div>
	
	
	<div class='backgroundpropos'>
		<h1 class='titre'>
			propos
		</h1>
		<?php
		$data=yaml_parse_file('yaml/propos.yaml');
		?>				
		<span id='propos'>
			<?php
					echo '<p>'.$data["accroche"].'</p>';
					echo '<p>'.$data["descrip"].'</p>';
					echo '<p>'.$data["loisir"].'</p>';
					echo '<p>'.$data["jaime"].'</p>';
					echo '<p>'.$data["ambition"].'</p>';


			?>
		</span>
	</div>




		
		<h1 class='titre'>
			<?php
			$data=yaml_parse_file('yaml/compétence.yaml');
			?>
		</h1>
	
		<span id='competence'>
			<h1 class='titre'>
				Compétences
			</h1>

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
			
			</span>
				<?php
				$data=yaml_parse_file('yaml/experience.yaml');
				?>
			<h1 class='titre'>
				experience
			</h1>
			<span id='experience'>
				<?php
					echo '<p>'.$data["titre"].'</p>';
					echo '<p>'.$data["descrip"].'</p>';
					echo '<p>'.$data["cv"].'</p>';
				?>
				<a href="cv.docx" download>
					<img id ="cv" src="image/imagecv.png">
				</a>	
			</span>
			<?php
			$data=yaml_parse_file('yaml/formation.yaml');
			?>
			<h1 class='titre'>
				formation
			</h1>
			<span id='formation'>
				<?php
					echo '<p>'.$data["titre"].'</p>';
					echo '<p>'.$data["descrip"].'</p>';

				?>
			</span>
			<div class='backgroundcontact'>
				<?php
				$data=yaml_parse_file('yaml/contact.yaml');
				?>
				<h1 class='titre'>
					contact
				</h1>
			
				<span id='contact'>
						<?php
							echo '<p>'.$data["descrip"].'</p>';
							echo '<p>'.$data["numero"].'</p>';
							echo '<p>'.$data["reseaux"].'</p>';

							echo'</span>';
							echo'<h1 class="titre">'.$data["titre"].'</h1>';
							echo'<span id="contacter">';
							
							echo '<p id="nom">'.$data["expediteur"].'</p>';
							echo '<input type="text" name="prenom" value="" placeholder="votre nom et prénom"/>';
							
							echo '<p>'.$data["civilite"].'</p>';
							echo '<input type="radio" name="civi2" value="Mme" /> Madame
								<input type="radio" name="civi2" value="Mlle" /> Mademoiselle
								<input type="radio" name="civi2" value="Mr" checked="checked" /> Monsieur';
							
							echo '<p id="email">'.$data["adresse"].'</p>';
							echo'<input type="text" name="adresse" value="" placeholder="votre adresse" />';
							
							echo '<p id="sujet">'.$data["objet"].'</p>';
							echo '<textarea name="le-message" rows="1" cols="40" placeholder="saisisez votre raison"></textarea>';
							
							echo '<p id="message">'.$data["contenu"].'</p>';
							echo '<textarea name="le-message" rows="6" cols="40" placeholder="saisisez votre message"></textarea>';
							
							echo '<p>'.$data["captcha"].'</p>';
							echo '<input type="radio" name="civi" value="Mme" /> oui
									<input type="radio" name="civi" value="Mlle" /> non';
							echo '<p>'.$data["envoi"].'</p>';
							
							
							mail('loic.theaudin@sts-sio-caen.info','objet',$_POST['contenu'],'From :"adresse" ');
							echo '<input type="submit" value="Envoyer" />';
						?>	
				</span>
			</div>
		</main>		
	</body>
</html>