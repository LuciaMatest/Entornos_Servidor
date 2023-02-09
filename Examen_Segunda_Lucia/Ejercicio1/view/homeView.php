<div class="container mt-3">
  <?
  if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }
  ?>
  <form action="">
    <div class="mb-3 mt-3">
      <label for="user">Usuario:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Usuario" name="user">
    </div>
    <div class="mb-3">
      <label for="pass">Contraseña:</label>
      <input type="password" class="form-control" id="inputName" placeholder="Contraseña" name="pass">
    </div>
    <div class="mb-3">
      <label for="recuerdame">Recuerdame</label>
      <input type="checkbox" id="recuerdame" name="recuerdame" />
    </div>
    <button type="submit" class="btn btn-primary" name="enviar">Iniciar Sesión</button>
  </form>
</div>