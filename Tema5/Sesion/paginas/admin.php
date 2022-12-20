<h2>Administrador</h2>
<?php
    session_start();
    require '../funciones/funciones.php';

    if(!estaValidado() || !esAdmin()){
        header('Location: ../login.php');
        exit;
    }
?>
<header>
    <h3><?
        echo $_SESSION['nombre'];
    ?></h3>
    <a href="../logout.php">Log out</a>
</header>