<?php
if(empty($_POST)){
    ?>
    <form method="post">
        <input type="text" name="username" placeholder="Nom">
    </form>
    <?php
} else {
	
	session_start();	
		$user = $_SESSION['username'] ?? [];
		$user = $_POST['username'];
		$_SESSION['username'] = $user;
}
include 'index.php';