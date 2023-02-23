<div class="container mt-3">
    <?
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <form action="./index.php" method="post">
        <div class="mb-3 mt-3">
            <label for="user">Usuario:</label>
            <!-- Accedemos a la cookie y establecemos el valor del usuario -->
            <input type="text" class="form-control" id="inputName" placeholder="Usuario" name="user" value="<?php if (isset($_COOKIE['nombre_usuario'])) {
                                                                                                                echo $_COOKIE['nombre_usuario'];
                                                                                                            } ?>">
        </div>
        <div class="mb-3">
            <label for="pass">Contraseña:</label>
            <input type="password" class="form-control" id="inputName" placeholder="Contraseña" name="pass">
        </div>
        <div class="mb-3">
            <!-- Al loguearse el usuario puede seleccionar recuerdame para que cuando cierre sesion se mantenga su nombre de usuario y solo tenga que escribir de nuevo la contraseña -->
            <label for="recuerdame">Recuerdame</label>
            <input type="checkbox" id="recuerdame" name="recuerdame" <?php if (isset($_COOKIE['recuerdame'])) {
                                                                            echo 'checked';
                                                                        } ?> />
        </div>
        <!-- Acceso a las paginas-->
        <button type="submit" class="btn btn-primary" name="enviar">Iniciar Sesión</button>
    </form>
</div>