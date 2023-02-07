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
                            </div>
                            <!-- Contraseña -->
                            <div class="mb-4 px-2">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contraseña" id="contraseña">
                            </div>
                            <!-- Contraseña rep -->
                            <div class="mb-4 px-2">
                                <label for="contraseña2" class="form-label">Repite contraseña</label>
                                <input type="password" class="form-control" name="contraseña2" id="contraseña2">
                            </div>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <!-- Email -->
                            <div class="mb-4 px-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="fecha" class="form-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="aaaa-mm-dd">
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