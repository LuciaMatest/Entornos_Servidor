<div class="col-4">
<?
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }
?>
    <form action="">
        <div class="mb-3 row">
            <label for="user" class="col-2 col-form-label">Usuario</label>
            <div class="col-8">
                <input type="text" class="form-control" name="user" id="inputName" placeholder="Usuario">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pass" class="col-2 col-form-label">Contraseña</label>
            <div class="col-8">
                <input type="password" class="form-control" name="pass" id="inputName" placeholder="Contraseña">
            </div>
        </div>
        
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-warning" name="enviar">Inciar Sesión</button>
            </div>
        </div>
    </form>
</div>