<div class="py-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 d-block d-lg-block">
                        <img src='./webroot/imagen/<? echo $key->imagen_alta ?>'>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-4 d-flex flex-column position-static">
                        <h3 class="fw-bold my-1 w-100 mb-1" style="color: #303030;font-size: 18px; text-transform: uppercase;line-height: 30px;"><? echo $key->nombre ?></h3>
                        <p><? echo $key->descripcion ?></p>
                        <p class="precio py-1" style="color: #444;font-size: 45px;"><b><? echo $key->precio ?> €</b></p>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="cod_producto" value="<? echo $key->cod_producto ?>">
                            <input type="submit" value="Ver" name="ver" class="botonG">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>