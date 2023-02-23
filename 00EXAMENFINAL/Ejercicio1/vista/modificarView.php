<?
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<div class="pt-5">
    <div class="container mod_ventas">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold">Modificar</h2>
                    </div>
                    <div class="card-body pt-0">
                        <!-- Formulario -->
                        <form action="./index.php" method="post">
                            <!-- ID -->
                            <div class="mb-4 px-2">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id" id="id" readonly>
                            </div>

                            <!-- Jugador 1 -->
                            <div class="mb-4 px-2">
                                <label for="jug1" class="form-label">Jugador 1</label>
                                <input type="number" class="form-control" name="jug1" id="jug1">
                                <?
                                //comprobar que no este vacio
                                if (isset($_REQUEST['modificar'])) {
                                    if (vacio("jug1")) {
                                ?>
                                        <span style="color:brown"> Introduce jugador 1</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Jugador 2 -->
                            <div class="mb-4 px-2">
                                <label for="jug2" class="form-label">Jugador 2</label>
                                <input type="number" class="form-control" name="jug2" id="jug2">
                                <?
                                //comprobar que no este vacio
                                if (isset($_REQUEST['modificar'])) {
                                    if (vacio("jug2")) {
                                ?>
                                        <span style="color:brown"> Introduce jugador 2</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="text" class="form-control" name="fecha" id="fecha">
                                <?
                                //comprobar que no este vacio
                                if (isset($_REQUEST['modificar'])) {
                                    if (vacio("fecha")) {
                                ?>
                                        <span style="color:brown"> Introduce fecha</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Resultado -->
                            <div class="mb-4 px-2">
                                <label for="resultado" class="form-label">Resultado</label>
                                <input type="text" class="form-control" name="resultado" id="resultado">
                                <?
                                //comprobar que no este vacio
                                if (isset($_REQUEST['modificar'])) {
                                    if (vacio("resultado")) {
                                ?>
                                        <span style="color:brown"> Introduce resultado</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="modificar" class="btn btn-primary" value="Modificar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>