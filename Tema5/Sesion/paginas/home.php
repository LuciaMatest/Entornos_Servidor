<h2>Home</h2>
<?php
    session_start();
    require '../funciones/funciones.php';

    if(!estaValidado()){
        header('Location: ../login.php');
        exit;
    }
?>

<?php
    if (esModerador()) {
        ?>
            <h3>Moderador</h3>
        <?
    } else {
        ?>
            <h3>Usuario</h3>
        <?
    }
?>

<header>
    <h3><?
        echo $_SESSION['nombre'];
    ?></h3>
    <a href="../logout.php">Log out</a>
</header>
