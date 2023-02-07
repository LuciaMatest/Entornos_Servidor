<div class="py-5 bg-white">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 d-block d-lg-block">
                        <img class="my-5" src='./webroot/imagen<? echo $producto->imagen_alta ?>'>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-4 d-flex flex-column position-static">
                        <h3 class="prod fw-bold my-1 w-100 mb-1"><? echo $producto->nombre ?></h3>
                        <p><? echo '<b>Cod:' . $producto->cod_producto . '</b> ' . $producto->descripcion ?></p>
                        <p class="precio2 py-1"><b><? echo $producto->precio ?> €</b></p>
                        <form action="./index.php" method="post">
                            <div class="form-group ">
                                <label for="cantidad">Unidades:</label>
                                <input type="number" class="border-gray" name="cantidad" value="1" title="Cantidad" size="4" min="1" max="<? echo $producto->stock ?>">
                            </div>
                            <div class="form-group py-3">
                                <div class="input-group w-100">
                                    <span class="carrito input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill text-white" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                    <input type="submit" value="Comprar" name="comprar" class="botonG cmp" <? if (!estaValidado() || $producto->stock == 0) { ?>disabled<? } ?>>
                                </div>
                                <label class="stock px-4 mx-3 py-3">Stock: <? echo $producto->stock ?> disponibles</label>
                                <input type="hidden" name="cod_producto" value="<? echo $producto->cod_producto ?>">
                            </div>
                        </form>
                        <div class="alert border-none alert-warning ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-truck me-2" viewBox="0 0 16 16">
                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            EN STOCK.¡Compra ahora y recíbelo en 24h!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>