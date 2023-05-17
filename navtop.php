<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Kue</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                $link_list = [
                    ["/", "Home"],
                    ["/logout.php", "Logout"]
                ];
                foreach ($link_list as $value) {
                    $path = $value[0];
                    $title = $value[1];
                    echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link" . ($_SERVER['SCRIPT_NAME'] == $path ? " active" : "") . "\" href=\"$path\">$title</a>";
                    echo "</li>";
                }
                ?>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
    </div>
</nav>