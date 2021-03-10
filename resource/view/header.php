<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Managment System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php
                        $currentUrl = $_SERVER['PHP_SELF'];
                        $isActiveIndex = strpos($currentUrl, 'index') && empty($_GET['action']);
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $isActiveIndex ? 'active' : '' ?>" aria-current="page" href="index.php">Lista Utenti</a>
                    </li>
                    <?php
                    $isActiveIndex = !empty($_GET['action']) && $_GET['action'] == 'insert';
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $isActiveIndex ? 'active' : '' ?>" href="index.php?action=insert">Aggiungi Utente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
