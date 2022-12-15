<?php
if(empty($_POST)){
    ?>
    <form method="post">
        <input type="text" name="elm" placeholder="Elément à ajouter">
    </form>
    <?php
} else {
    session_start();
    $list = $_SESSION['todolist'] ?? [];
    $list[] = $_POST['elm'];
    $_SESSION['todolist'] = $list;
}
include 'index.php';
