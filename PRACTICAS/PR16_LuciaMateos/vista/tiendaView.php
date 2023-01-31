<div class="container py-3">
    <section class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-3 mb-4 text-center">
        <?
        $array_productos = ProductoDAO::findAll();
        foreach ($array_productos as $key) { ?>
            <article class="col">
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <img src='./webroot/imagen<? echo $key->img_baja ?>' alt="productos_pelu">
                    </div>
                    <div class="card-body">
                        <h3 class="fw-bold my-1" style="color: #303030;font-size: 25px;"><? echo $key->nombre ?></h3>
                        <p class="precio py-1" style="color: #444;font-size: 20px;"><b><? echo $key->precio ?>€</b></p>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="cod_producto" value="<? echo $key->cod_producto ?>">
                            <div class="botonG">
                                <input type="submit" value="ver" name="ver">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </article>
        <? }
        ?>
    </section>
</div>