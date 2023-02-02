<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./web/img/cerdis.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./web/img/Banner.png" alt="Los Angeles" class="d-block w-100">

      
    </div>
    <div class="carousel-item">
      <img src="./web/img/FelizDia.png" alt="curando Jamones" class="d-block w-100">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="col-12 text-center mt-4">
  <p class="display-2">Los más deseados</p>
</div>

<div class="album py-5">
  <div class="container">
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
      <?php
      $arrayJamones=ProductoDAO::findAll();

      foreach ($arrayJamones as $jamon) {
        if ($jamon->precio >= 100) {?>
          <div class='col '>
          <div class='card shadow-sm'>
          <img src='<? echo $jamon->url ?>' width='100%' height='450'>
          <div class='card-body bg-dark'>
          <h3 class='h3 text-light'><? echo $jamon->nombre ?></h3>
          <div class='d-flex justify-content-between align-items-center'>
            <small class='text-light'><? echo $jamon->precio ?>€</small>
          <div class='btn-group'>";
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
      }
      ?>
    </div>
  </div>
</div>