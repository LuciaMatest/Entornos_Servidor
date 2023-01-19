<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-3">
  <form action="./index.php" method="post">
    <div class="mb-3 mt-3">
      <label for="user">Usuario:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Usuario" name="user" value="<? echo $usuario->usuario?>">
    </div>
    <div class="mb-3">
      <label for="pass">Contraseña:</label>
      <input type="password" class="form-control" id="inputName" placeholder="Contraseña" name="pass" value="<? echo $usuario->clave?>">
    </div>
    <div class="mb-3">
      <label for="pass">Repetir contraseña:</label>
      <input type="password" class="form-control" id="inputName" placeholder="Contraseña" name="pass" value="<? echo $usuario->clave?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="inputName">Nombre:</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" value="<? echo $usuario->nombre?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="inputEmail">Email:</label>
      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<? echo $usuario->correo?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="inputPerfil">Perfil:</label>
      <input type="text" class="form-control" id="inputPerfil" placeholder="Perfil" name="perfil" value="<? echo $usuario->perfil?>">
    </div>
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary" name="registrar">Registrarse</button>
    </div>
  </form>
</div>