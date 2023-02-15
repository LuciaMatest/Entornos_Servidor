<div class="pt-5">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <h1 class="text-center fw-bold pb-3">Mi cuenta</h1>
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold">Acceder</h2>
                    </div>
                    <div class="card-body pt-0">
                        <form action="./index.php" method="post">
                            <div class="mb-4 px-2">
                                <label for="idUser" class="form-label">Nombre de usuario </label>
                                <input type="text" class="form-control" name="user" id="user">
                            </div>
                            <div class="mb-2 px-2">
                                <label for="idContraseña" class="form-label" required>Contraseña </label>
                                <input type="password" class="form-control" name="contraseña" id="contraseña">
                            </div>
                            <div class="my-2  px-2">
                                <?
                                if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Acceder" name="enviar" class="botonG">
                                <input type="submit" value="Crear cuenta" name="nuevaCuenta" class="boton px-2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>