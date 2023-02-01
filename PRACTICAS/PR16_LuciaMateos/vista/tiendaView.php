<div class="container py-3">
    <section class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-3 mb-4 text-center">
        <?
        $array_productos = ProductoDAO::findAll();
        foreach ($array_productos as $producto) { ?>
            <article class="col">
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <img src='./webroot/imagen<? echo $producto->imagen_baja ?>' alt="productos_pelu">
                    </div>
                    <div class="card-body">
                        <h3 class="fw-bold my-1" style="color: #303030;font-size: 25px;"><? echo $producto->nombre ?></h3>
                        <p class="precio py-1" style="color: #444;font-size: 20px;"><b><? echo $producto->precio ?>€</b></p>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="cod_producto" value="<? echo $producto->cod_producto ?>">
                            <input type="submit" value="Ver producto" name="ver" class="botonG">
                        </form>
                    </div>
                </div>
            </article>
        <? }
        ?>
    </section>
</div>