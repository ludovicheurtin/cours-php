<header>
    <h1 style="text-align: center">Ma super todolist liste</h1>
</header>

<?php if(!empty($_SESSION['error'])): ?>
<p><?php echo $_SESSION['error'] ?></p>

<?php unset($_SESSION['error']) ?>

<?php endif; ?>