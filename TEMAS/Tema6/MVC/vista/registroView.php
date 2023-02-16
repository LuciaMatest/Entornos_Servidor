<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-3">
  <form action="./index.php" method="post">
    <div class="mb-3 mt-3">
      <label for="user">Usuario:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Usuario" name="user" >
    </div>
    <div class="mb-3">
      <label for="pass">Contraseña:</label>
      <input type="password" class="form-control" id="inputName" placeholder="Contraseña" name="pass" >
    </div>
    <div class="mb-3">
      <label for="pass2">Repetir contraseña:</label>
      <input type="password" class="form-control" id="inputName" placeholder="Contraseña2" name="pass2" >
    </div>
    <div class="mb-3 mt-3">
      <label for="inputName">Nombre:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" >
    </div>
    <div class="mb-3 mt-3">
      <label for="inputEmail">Email:</label>
      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" >
    </div>
    <div class="mb-3 mt-3">
      <input type="submit" class="btn btn-primary" value="Guardar" name="guardar">
    </div>
  </form>
</div>