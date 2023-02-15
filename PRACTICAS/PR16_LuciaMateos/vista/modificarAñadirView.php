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
                        <h2 class="px-3 pt-4 fw-bold">Nuevo producto</h2>
                    </div>
                    <div class="card-body pt-0">
                        <!-- Formulario -->
                        <form action="./index.php" method="post" enctype="multipart/form-data">
                            <!-- ID -->
                            <div class="mb-4 px-2">
                                <label for="cod_producto" class="form-label">ID</label>
                                <input type="text" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_objeto" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (vacio("cod_producto")) {
                                ?>
                                        <span style="color:brown"> Introduce codigo</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_alta" class="form-label">Imagen alta</label>
                                <input type="file" class="form-control" name="imagen_alta" id="imagen_alta" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (!file_exists($_FILES['imagen_alta']['tmp_name'])) {
                                ?>
                                        <span style="color:brown"> Introduce imagen</span>
                                    <?
                                    } elseif (!patronImagenAlta()) {
                                    ?>
                                        <span style="color:brown"> Imagen no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Imagen -->
                            <div class="mb-4 px-2">
                                <label for="imagen_baja" class="form-label">Imagen baja</label>
                                <input type="file" class="form-control" name="imagen_baja" id="imagen_baja" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (!file_exists($_FILES['imagen_baja']['tmp_name'])) {
                                ?>
                                        <span style="color:brown"> Introduce imagen</span>
                                    <?
                                    } elseif (!patronImagenBaja()) {
                                    ?>
                                        <span style="color:brown"> Imagen no válida, revise</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Nombre -->
                            <div class="mb-4 px-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (vacio("nombre")) {
                                ?>
                                        <span style="color:brown"> Introduce nombre</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Descripcion -->
                            <div class="mb-4 px-2">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (vacio("descripcion")) {
                                ?>
                                        <span style="color:brown"> Introduce descripcion</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Precio -->
                            <div class="mb-4 px-2">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (vacio("precio")) {
                                ?>
                                        <span style="color:brown"> Introduce precio</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <!-- Stock -->
                            <div class="mb-4 px-2">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id="stock" value="">
                                <?
                                //comprobar que no este vacio, que sea fecha correcta y si lo está pongo un error
                                if (isset($_REQUEST['nuevo'])) {
                                    if (vacio("stock")) {
                                ?>
                                        <span style="color:brown"> Introduce stock</span>
                                <?
                                    }
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Crear" name="nuevo" class="botonG">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>