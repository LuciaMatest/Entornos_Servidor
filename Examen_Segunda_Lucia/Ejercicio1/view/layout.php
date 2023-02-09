<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./webroot/css/style.css">
  <title><? echo $_SESSION['pagina']; ?></title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.php?home">Home</a>
            </li>
          </ul>
          <form class="d-flex" action='./index.php' method='post'>
            <?php
            if (estaValidado()) {
              echo '<div class="container mt-3">';
              echo '<h2 class="text-muted">' . $_SESSION['nombre'] . '</h2>';
              echo '<input class="btn btn-primary" type="submit" name="logout" value="Logout">';
              echo '</div>';
            }
            ?>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <? require_once($_SESSION['vista']) ?>
  </main>
</body>

</html>