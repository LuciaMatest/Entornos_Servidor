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
                                    <label for="cod_producto" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_objeto" readonly value="<? echo $almacen->cod_producto ?>">
                                </div>
                            <? } ?>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_alta" class="form-label">Imagen alta</label>
                                <input type="file" class="form-control" name="imagen_alta" id="imagen_alta" value="<? if ($_SESSION['accion'] == 'editar') {
                                                                                                                        echo $almacen->imagen_alta;
                                                                                                                    } ?>">
                            </div>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_baja" class="form-label">Imagen baja</label>
                                <input type="file" class="form-control" name="imagen_baja" id="imagen_baja" value="<? if ($_SESSION['accion'] == 'editar') {
                                                                                                                        echo $almacen->imagen_baja;
                                                                                                                    } ?>">
                            </div>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<? if ($_SESSION['accion'] == 'editar') {
                                                                                                                echo $almacen->nombre;
                                                                                                            } ?>">
                            </div>
                            <!-- Descripcion -->
                            <div class="mb-4 px-2">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<? if ($_SESSION['accion'] == 'editar') {
                                                                                                                        echo $almacen->descripcion;
                                                                                                                    } ?>">
                            </div>
                            <!-- Precio -->
                            <div class="mb-4 px-2">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" value="<? if ($_SESSION['accion'] == 'editar') {
                                                                                                                echo $almacen->precio;
                                                                                                            } ?>">
                            </div>
                            <!-- Stock -->
                            <div class="mb-4 px-2">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id="stock" readonly value="<? echo $almacen->stock ?>">
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