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
                            <? if ($_SESSION['accion'] == 'editar') { ?>
                                <div class="mb-4 px-2">
                                    <label for="id_albaran" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id_albaran" id="id_albaran" readonly value="<? echo $albaran->id_albaran ?>">
                                </div>
                            <? } ?>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="fecha_albaran" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha_albaran" id="fecha_albaran" value="<?
                                                                                                                        if ($_SESSION['accion'] == 'editar') {
                                                                                                                            echo $albaran->fecha_albaran;
                                                                                                                        } ?>">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['modificar'])) {
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
                            <!-- Codigo -->
                            <div class="mb-4 px-2">
                                <label for="cod_producto" class="form-label">Código</label>
                                <input type="text" class="form-control" name="cod_producto" id="cod_producto" readonly value="<? echo $albaran->cod_producto ?>">
                            </div>
                            <!-- Cantidad -->
                            <div class="mb-4 px-2">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?
                                                                                                                if ($_SESSION['accion'] == 'editar') {
                                                                                                                    echo $albaran->cantidad;
                                                                                                                } ?>">
                                <?
                                //comprobar que no este vacio y que cumple los requisitos, si lo está pongo un error
                                if (isset($_REQUEST['modificar'])) {
                                    if (vacio("cantidad")) {
                                ?>
                                        <span style="color:brown"> Introduce cantidad</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="usuario_albaran" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario_albaran" id="usuario_albaran" value="<?
                                                                                                                            if ($_SESSION['accion'] == 'editar') {
                                                                                                                                echo $albaran->usuario_albaran;
                                                                                                                            } ?>">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Modificar" name="modificar" class="botonG">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>