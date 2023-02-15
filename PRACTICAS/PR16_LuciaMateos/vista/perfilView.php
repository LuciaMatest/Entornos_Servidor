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
                <h1 class="text-center fw-bold pb-3">Mi perfil</h1>
                <div class="card">
                    <div class="card-body pt-4">
                        <form action="./index.php" method="post">
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="idUser" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="user" id="idUser" value="<? echo $usuario->usuario ?>" readonly>
                                <?
                                //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                                if (isset($_REQUEST['guardar'])) {
                                    if (vacio("user")) {
                                ?>
                                        <span style="color:brown"> Introduce usuario</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <? if ($_SESSION['accion'] == 'editar') { ?>
                                <!-- Contraseña -->
                                <div class="mb-4 px-2">
                                    <label for="idContraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="contraseña" id="idContraseña" value="<? echo $usuario->clave ?>">
                                    <?
                                    //comprobar que no este vacio y valido, si lo está pongo un error
                                    if (isset($_REQUEST['guardar'])) {
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
                            <?
                            }
                            ?>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="idNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="idNombre" value="<? echo $usuario->nombre ?>">
                                <?
                                //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                                if (isset($_REQUEST['guardar'])) {
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
                                <label for="idEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="idEmail" value="<? echo $usuario->correo ?>">
                                <?
                                //comprobar que no este vacio y valido, si lo está pongo un error
                                if (isset($_REQUEST['guardar'])) {
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
                            <!-- Rol -->
                            <div class="mb-4 px-2">
                                <label for="idOpcion" class="form-label">Rol</label>
                                <select name="rol" id="idOpcion" class="w-100 d-inline-block bg-white">
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
                                <? if ($_SESSION['accion'] == 'editar') { ?>
                                    <input type="submit" class="botonG" value="Guardar" name="guardar">
                                    <?
                                }
                                    ?><?
                                        if ($_SESSION['accion'] == 'ver') { ?>

                                    <input type="submit" class="botonG" value="Editar" name="editar">
                                <?
                                        }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>