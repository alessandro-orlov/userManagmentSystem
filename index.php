<?php
include __DIR__.'/helper_functions.php';
//insertNewUser(1, $conn);
?>
<!doctype html>
<html lang="en" class="h-100">
    <head>
        <!-- Contenuto del head del HTML -->
        <?php require_once __DIR__ . ('/resource/view/head.php'); ?>
    </head>

    <!-- BODY -->
    <body class="d-flex flex-column h-100">
        <!-- Header -->
        <?php require_once __DIR__ . ('/resource/view/header.php'); ?>

        <!-- Page Content -->
        <?php require_once __DIR__ . ('/resource/view/main.php'); ?>

        <!-- Footer -->
        <?php require_once __DIR__ . ('/resource/view/footer.php'); ?>

        <script src="resource/js/bootstrap.js" ></script>
  </body>
</html>