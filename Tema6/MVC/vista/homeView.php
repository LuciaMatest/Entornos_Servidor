<h1>Home</h1>
<?php
    foreach ($arrayProducto as $producto) {
    ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src='./webroot<?echo $producto->img?>' alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?echo $producto->nombre?></h5>
                <p class="card-text"><?echo substr($producto->descripcion,0,20);?>...</p>
                <h5 class="card-title">Precio: <?echo $producto->precio?></h5>
                <input type="number" name="cantidad">
                <input type="hidden" name="codProd" value="<?echo $producto->codProd?>" >
                <input type="submit" href="./index.php" class="btn btn-primary" value ='Ver' name='ver'>
            </div>
        </div>
    <?php
    }
?>