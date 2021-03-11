<?php
include __DIR__.'/helper_functions.php';

$page = $_SERVER['PHP_SELF'];
$recordsPerPageValues = [5,10,15,20,40];

$recordsPerPage = getParams('recordsPerPage', 10);

$orderDir = getParams('orderDir', 'DESC' );
$orderClass = $orderDir;
$orderDir = $orderDir == "ASC" ? "DESC" : "ASC";

$orderBy = getParams('orderBy', 'id');
$searchUsers = getParams('searchUsers', '');
$params = [
    'orderDir' => $orderDir,
    'orderBy' => $orderBy,
    'recordsPerPage' => $recordsPerPage,
    'searchUsers' => $searchUsers,
];


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