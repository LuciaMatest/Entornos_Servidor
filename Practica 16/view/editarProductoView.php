<div class="container">
    <form action="./index.php" method="post" enctype="multipart/form-data">
        <?if ($_SESSION['accion']=='editar'){?>
        <div class="mb-3 row">
            <label for="idProducto" class="col-4 col-form-label">ID</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idProducto" id="idProducto" placeholder="idProducto" readonly value="<? echo $producto->idProducto ?>">
            </div>
        </div>
        <?}?>
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?
                if ($_SESSION['accion']=='editar') {
                    echo $producto->nombre;
                }?>" <?if ($_SESSION['accion']=='editar') {
                    echo " readonly";
                }?>>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precio" class="col-4 col-form-label">Precio</label>
            <div class="col-8">
                <input type="number" step="0.01" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?
                if ($_SESSION['accion']=='editar') {
                    echo $producto->precio;
                }?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"><? if($_SESSION['accion']=='editar'){
                echo $producto->descripcion;
            }?></textarea>
        </div>
        <div class="mb-3 row">
            <label for="stock" class="col-4 col-form-label">Stock</label>
            <div class="col-8">
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock" value="<?
                if ($_SESSION['accion']=='editar') {
                    echo $producto->stock;
                }?>" <?if ($_SESSION['accion']=='editar') {
                    echo " readonly";
                }?>>
            </div>
        </div>
        <div class="mb-3 row">
          <label for="" class="form-label">Imagen</label>
          <input type="file" class="form-control" name="url" id="url" placeholder="Imagen" <?if ($_SESSION['accion']=='editar'){
            echo ' disabled';
          }?>>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <input type="submit" name="guardar" class="btn btn-outline-danger mb-1 mt-1" value="Guardar">
            </div>
        </div>
    </form>
</div>