<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Vista</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Features</a>
                </li>
            </ul>
            <form class="d-flex" action='./index.php' method='post'>
                <?php
                    if (!estaValidado()) {
                        echo '<button class="btn btn-primary" type="submit" name="login">Login</button>';
                    } else {
                        echo '<h2>'.$_SESSION['user'].'</h2>';
                        echo '<button class="btn btn-primary" type="submit" name="miperfil">Mi perfil</button>';
                        echo '<button class="btn btn-primary" type="submit" name="logout">Logout</button>';
                    }
                ?>
            </form>
            </div>
        </div>
        </nav>
    </header>
    <main>
        <?php
            require_once $_SESSION['vista'];
        ?>
    </main>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
</body>
</html>