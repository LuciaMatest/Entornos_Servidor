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
                                    <label for="cod_objeto" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="cod_objeto" id="cod_objeto" placeholder="cod_objeto" readonly value="<? echo $objeto->cod_objeto ?>">
                                </div>
                            <? } ?>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_alta" class="form-label">Imagen alta</label>
                                <input type="file" class="form-control" name="alta" id="imagen_alta" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo 'disabled';
                                } ?>">
                            </div>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_baja" class="form-label">Imagen baja</label>
                                <input type="file" class="form-control" name="baja" id="imagen_baja" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo 'disabled';
                                } ?>">
                            </div>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="idNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="idNombre" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $objeto->nombre;
                                } ?>">
                            </div>
                            <!-- Descripcion -->
                            <div class="mb-4 px-2">
                                <label for="idDescripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="idDescripcion" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $objeto->descripcion;
                                } ?>">
                            </div>
                            <!-- Precio -->
                            <div class="mb-4 px-2">
                                <label for="idPrecio" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" id="idPrecio" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $objeto->precio;
                                } ?>">
                            </div>
                            <!-- Stock -->
                            <div class="mb-4 px-2">
                                <label for="idStock" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id="idStock" value="<?
                                if ($_SESSION['accion'] == 'editar') {
                                    echo $objeto->stock;
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