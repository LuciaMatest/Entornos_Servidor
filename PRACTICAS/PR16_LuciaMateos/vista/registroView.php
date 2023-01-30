<div class="pt-1">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <h1 class="text-center fw-bold pb-3" style="color: #444;">Mi cuenta</h1>
                <div class="card" style="background-color: #d4d4d4;border-style: none;">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Registrarse</h2>
                    </div>
                    <div class="card-body pt-0">
                        <form action="./index.php" method="post">
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="idUser" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="user" id="idUser">
                            </div>
                            <? if (isset($_SESSION['errores']['user'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['user'] ?> </div>
                            <? } ?>
                            <!-- Contraseña -->
                            <div class="mb-4 px-2">
                                <label for="idContraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contraseña" id="idContraseña">
                            </div>
                            <? if (isset($_SESSION['errores']['contraseña'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['contraseña'] ?> </div>
                            <? } ?>
                            <!-- Contraseña rep -->
                            <div class="mb-4 px-2">
                                <label for="idContraseña2" class="form-label">Repite contraseña</label>
                                <input type="password" class="form-control" name="contraseña2" id="idContraseña2">
                            </div>
                            <? if (isset($_SESSION['errores']['contraseña2'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['contraseña2'] ?> </div>
                            <? } ?>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="idNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="idNombre">
                            </div>
                            <? if (isset($_SESSION['errores']['nombre'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['nombre'] ?> </div>
                            <? } ?>
                            <!-- Email -->
                            <div class="mb-4 px-2">
                                <label for="idEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="idEmail">
                            </div>
                            <? if (isset($_SESSION['errores']['email'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['email'] ?> </div>
                            <? } ?>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="idFecha" class="form-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="aaaa-mm-dd">
                            </div>
                            <? if (isset($_SESSION['errores']['fecha'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['fecha'] ?> </div>
                            <? } ?>
                            <!-- Rol -->
                            <div class="mb-4 px-2">
                                <label for="idOpcion" class="form-label">Rol</label>
                                <select name="rol" id="idOpcion" class="w-100 d-inline-block bg-white" style="box-sizing: border-box;border-radius: 4px;border: 1px solid #ccc;padding: 12px 20px;margin: 8px 0;">
                                    <option value="0">Seleccione una opción</option>
                                    <option value="ADM01">Administrador</option>
                                    <option value="M0001">Moderador</option>
                                    <option value="U0001">Usuario normal</option>
                                </select>
                            </div>
                            <? if (isset($_SESSION['errores']['rol'])) { ?>
                                <div class="invalid-feedback"><? echo $_SESSION['errores']['rol'] ?> </div>
                            <? } ?>
                            <div class="text-center">
                                <input type="submit" value="Registrarse" name="enviar" class="botonG">
                                <!-- <a href="login.php" class="ps-3">Volver</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>