<!------------------------------------------------------------------------------------------------------------------>

<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <h1 class="page-header"><? echo $jamon->nombre ?></h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6 mb-4">

            <div class="">
                <div class="main-product-image space">
                    <img id="first-image" src="<? echo $jamon->url ?>" alt="<? echo $jamon->nombre ?>" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <form class="form-horizontal" action="./index.php" method="post" enctype="multipart/form-data">

                <!-- Product Price  -->
                <div class="form-group price_elem row mb-4">
                    <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Precio:</label>
                    <div class="col-sm-8 col-md-9">
                        <span class="product-form-price" id="product-form-price"><? echo $jamon->precio ?>€</span>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="cantidad" class="col-sm-3 col-md-3 form-control-label">Cantidad:</label>
                    <div class="col-sm-5 col-md-5">
                        <input type="number" class="qty form-control" id="input-qty" name="cantidad" maxlength="<? echo $jamon->stock ?>" value="1">
                    </div>
                </div>




                <!--Sin Stock -->
                <? if ($jamon->stock == 0) { ?>
                    <div class="form-group product-stock product-out-stock row mb-4">
                        <label class="col-sm-3 col-md-3 form-control-label">Disponibilidad:</label>
                        <div class="col-sm-8 col-md-9">
                            <span class="product-form-price">Sin stock</span>
                            <p>Este producto se encuentra sin stock actualmente</p>
                        </div>
                    </div>
                <? } ?>


                <div class="form-group product-stock product-available row mb-4">
                    <label class="col-sm-3 col-md-3 form-control-label"></label>
                    <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                        <input type="submit" class="btn btn-danger" name="comprar" value="Comprar" <? if (!estaValidado() || $jamon->stock == 0) {
                                                                                                        echo ' disabled';
                                                                                                    } ?>>
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-md-3 form-control-label">Descripción:</label>
                    <div class="col-sm-8 col-md-9 description">
                        <p><? echo $jamon->descripcion ?></p>
                    </div>
                </div>
                <input type="hidden">
            </form>
        </div>
    </div>
</div>


</div>