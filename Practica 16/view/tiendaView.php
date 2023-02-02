<div class="album py-5">
  <div class="container">
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
      <?php
      $arrayJamones=ProductoDAO::findAll();

      foreach ($arrayJamones as $jamon) {?>
          <div class='col'>
          <div class='card shadow-sm'>
          <img src='<? echo $jamon->url ?>' width='100%' height='450'>
          <div class='card-body bg-dark'>
          <h3 class='h3 text-light'><? echo $jamon->nombre ?></h3>
          <div class='d-flex justify-content-between align-items-center'>
            <small class='text-light'><? echo $jamon->precio ?>€</small>
          <div class='btn-group'>
            <form action="./index.php" method="post">
              <input type="hidden" name="idProducto" value="<? echo $jamon->idProducto ?>">
              <input type="submit" value="Ver" name="ver" class="btn btn-danger">
            </form>
          </div>
          </div>
          </div>
          </div>
          </div>
        <?}
      ?>
    </div>
  </div>
</div>