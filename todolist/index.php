<?php
$tasks = array();
$tasks[] = array(
    "status" => false,
    "task" => "Task 1"
);
$tasks[] = array(
    "status" => true,
    "task" => "Task 2"
);
$tasks[] = array(
    "status" => false,
    "task" => "Task 3"
);
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="task" placeholder="Saisir une tâche..."/>
        <button type="submit">OK</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom de la chaîne</th>
                <th>Checker</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task["status"] ? "-":"+" ?></td>
                <td><?php echo $task["task"] ?></td>
                <td><a href="#">check</a></td> <td><a href="#">modifier</a></td>
                <td><a href="#">supprimer</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>