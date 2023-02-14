<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<div class="pt-1">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <h1 class="text-center fw-bold pb-3">Mi cuenta</h1>
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold">Registrarse</h2>
                    </div>
                    <div class="card-body pt-0">
                        <form action="./index.php" method="post">
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="user" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="user" id="user">
                                <?
                                //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("user")) {
                                ?>
                                        <span style="color:brown"> Introduce usuario</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Contraseña -->
                            <div class="mb-4 px-2">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contraseña" id="contraseña">
                                <?
                                //comprobar que no este vacio y valido, si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("contraseña")) {
                                ?>
                                        <span style="color:brown"> Introduce contraseña</span>
                                    <?
                                    } elseif (!patronContraseña()) {
                                    ?>
                                        <span style="color:brown"> Contraseña no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Contraseña rep -->
                            <div class="mb-4 px-2">
                                <label for="contraseña2" class="form-label">Repite contraseña</label>
                                <input type="password" class="form-control" name="contraseña2" id="contraseña2">
                                <?
                                //comprobar que no este vacio y valido, si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("contraseña2")) {
                                ?>
                                        <span style="color:brown"> Introduce contraseña</span>
                                    <?
                                    } elseif (!patronContraseña()) {
                                    ?>
                                        <span style="color:brown"> Contraseña no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                                <?
                                //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("nombre")) {
                                ?>
                                        <span style="color:brown"> Introduce nombre</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Email -->
                            <div class="mb-4 px-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <?
                                //comprobar que no este vacio y valido, si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("email")) {
                                ?>
                                        <span style="color:brown"> Introduce email</span>
                                    <?
                                    } elseif (!patronEmail()) {
                                    ?>
                                        <span style="color:brown"> Email no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="fecha" class="form-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="aaaa-mm-dd">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['registrar'])) {
                                    if (vacio("fecha")) {
                                ?>
                                        <span style="color:brown"> Introduce fecha</span>
                                    <?
                                    } elseif (!patronFecha()) {
                                    ?>
                                        <span style="color:brown"> Fecha no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Rol -->
                            <div class="mb-4 px-2">
                                <label for="rol" class="form-label">Rol</label>
                                <select name="rol" id="rol" class="w-100 d-inline-block bg-white">
                                    <option value="0">Seleccione una opción</option>
                                    <option value="ADM01">Administrador</option>
                                    <option value="M0001">Moderador</option>
                                    <option value="U0001">Usuario normal</option>
                                </select>
                                <?php
                                //Comprobar si existe
                                if (existe('rol') && $_REQUEST['rol'] == 0) {
                                ?>
                                    <span style="color:brown"> Introduce un rol</span>
                                <?
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Registrarse" name="registrar" class="botonG">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>