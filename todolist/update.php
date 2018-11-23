<?php
session_start();
$index = $_GET['index'];
$taskName = $_SESSION['tasks'][$index]['task'];
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include 'layout/header.php'  ?>

<form action="index.php" method="post">
    <input type="text" name="task-modified" value="<?php echo $taskName ?>">
    <input type="hidden" name="task-index" value="<?php echo $index ?>">
    <button type="submit">OK</button>
</form>

<?php include 'layout/footer.php'  ?>
</body>
</html>