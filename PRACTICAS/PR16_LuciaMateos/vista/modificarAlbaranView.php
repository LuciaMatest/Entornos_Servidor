<div class="pt-5">
    <div class="container mod_ventas">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-9 col-sm-10">
                <div class="card" style="background-color: #d4d4d4;border-style: none;">
                    <div class="card-title text-center">
                        <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Modificar</h2>
                    </div>
                    <div class="card-body pt-0">
                        <!-- Formulario -->
                        <form action="./index.php" method="post" enctype="multipart/form-data">
                            <!-- ID -->
                            <? if ($_SESSION['accion'] == 'editar') { ?>
                                <div class="mb-4 px-2">
                                    <label for="idAlbaran" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="albaran" id="idAlbaran" readonly value="<? echo $albaran->id_albaran ?>">
                                </div>
                            <? } ?>
                            <!-- Fecha -->
                            <div class="mb-4 px-2">
                                <label for="idFechaAlbaran" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha_albaran" id="idFechaAlbaran" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $albaran->fecha_albaran;
                                } ?>">
                            </div>
                            <!-- Codigo -->
                            <div class="mb-4 px-2">
                                    <label for="idProducto" class="form-label">Código</label>
                                    <input type="text" class="form-control" name="idProducto" id="idProducto" readonly value="<? echo $producto->cod_producto ?>">
                            </div>
                            <!-- Cantidad -->
                            <div class="mb-4 px-2">
                                <label for="idCantidad" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad" id="idCantidad" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $albaran->cantidad;
                                } ?>">
                            </div>
                            <!-- Usuario -->
                            <div class="mb-4 px-2">
                                <label for="idUsuario" class="form-label">Usuario</label>
                                <input type="number" class="form-control" name="usuario_albaran" id="idUsuario" value="<?
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