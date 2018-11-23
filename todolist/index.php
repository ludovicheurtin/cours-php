<?php
session_start();

require_once 'libs/functions.php';
if(!empty($_POST['task-modified']) && isset($_POST['task-index'])) {
    $_SESSION['tasks'][$_POST['task-index']]['task'] = $_POST['task-modified'];
}
// Création d'un tableau dans la session avec la clé "tasks"
if(!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}
// Vérification que l'on reçoit une tâche à partir de la clé task du formulaire
// On créer la tâche dans le tableau
if(!empty($_POST["task"])) {
    // Ajout d'un nouveau tableau dans notre tableau de tâches ($tasks)
//    $tasks[] = array(
//        "status" => false,
//        "task" => $_POST["task"]
//    );
$found = false;
foreach ($_SESSION['tasks'] as $task) {
    if($task['task'] == $_POST["task"]) {
        $found = true;
    }
}
if($found === false) {
    $_SESSION["tasks"][] = array(
        "status" => true,
        "task" => $_POST["task"]
    );
}
else {
    $taskName = $_POST['task'];
    $_SESSION["error"] = "Vous avez déjà une tâche sous ce nom";
}

redirection();
}
if(isset($_GET["update"])) {
    $index = $_GET["update"];
    $_SESSION["tasks"][$index]["status"] = !$_SESSION["tasks"][$index]["status"];
    redirection();
}
if(isset($_GET["delete"])) {
    $index = $_GET["delete"];
    unset($_SESSION["tasks"][$index]);
    redirection();
}
if(isset($_GET["clean"]) && $_GET["clean"] == "1") {
    session_destroy();
    redirection();
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<?php include 'layout/header.php'?>
<form action="" method="post">
    <input type="text" name="task" placeholder="Saisir une tâche...">
    <button type="submit">OK</button>
    <a href="?clean=1">Clean</a>
</form>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nom de la tâche</th>
        <th>Checker</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php if(count($_SESSION["tasks"])): ?>
    <?php foreach ($_SESSION["tasks"] as $index => $task): ?>
        <tr>
            <!-- Ceci est presque comme une condition. C'est un ternaire -->
            <td><?php echo $task["status"] ? "+" : "-" ?></td>
            <td><?php echo $task["task"] ?></td>
            <td><a href="?update=<?php echo $index ?>">check</a></td>
            <td><a href="update.php?index=<?php echo $index ?>">modifier</a></td>
            <td><a href="?delete=<?php echo $index ?>">supprimer</a></td>
        </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Aucune tâche, veuillez en saisir une...</td>
        </tr>
    <?php endif ?>
    </tbody>
</table>

<?php include 'layout/footer.php'; ?>

</html>