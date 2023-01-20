
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src='./webroot<?echo $producto->img?>' alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?echo $producto->nombre?></h5>
                <p class="card-text"><?echo $producto->descripcion?>...</p>
                <h5 class="card-title">Precio: <?echo $producto->precio?></h5>
                <input type="hidden" name="codProd" value="<?echo $producto->codProd?>" >
                <input type="submit" href="./index.php" class="btn btn-primary" value ='Ver' name='ver'>
            </div>
        </div>
