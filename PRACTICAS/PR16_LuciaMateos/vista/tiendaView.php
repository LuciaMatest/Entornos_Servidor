<div class="container py-3">
    <section class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-3 mb-4 text-center">
        <?
        $array_productos = ProductoDAO::findAll();
        foreach ($array_productos as $producto) { ?>
            <article class="col">
                <div class="card mb-4">
                    <div class="imagenes card-header bg-white">
                        <img src='./webroot/imagen/producto/<? echo $producto->imagen_baja ?>' alt="productos_pelu">
                    </div>
                    <div class="card-body bg-white">
                        <h3 class="fw-bold my-1"><? echo $producto->nombre ?></h3>
                        <p class="precio py-1"><b><? echo $producto->precio ?>€</b></p>
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