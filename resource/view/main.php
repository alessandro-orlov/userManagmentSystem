<main class="flex-shrink-0">
    <div class="mb-5">&nbsp;</div>
    <div class="container">

        <?php
            $currentUrl = $_SERVER['PHP_SELF'];
            $action = $_GET['action'];

            switch ($action) {
                case "insert":
                    include __DIR__."/_pages/insertUser.php";
                    break;
                default: include __DIR__. "/_pages/user-list.php";
            }

        ?>
    </div>
</main>
