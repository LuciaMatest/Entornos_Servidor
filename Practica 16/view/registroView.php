<div class="container">
    <form action="./index.php" method="post">
        <!--NOMBRE-->
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
        </div>
        <?if (isset($_SESSION['registroError']['nombre'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['nombre']?> </div>
        <?}?>
        <!--USUARIO-->
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Usuario</label>
            <div class="col-8">
                <input type="text" class="form-control" name="user" id="inputName" placeholder="Usuario">
            </div>
        </div>
        <?if (isset($_SESSION['registroError']['user'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['user']?> </div>
        <?}?>

        <!--CONTRASEÑAS-->
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Contraseña</label>
            <div class="col-8">
                <input type="pass" class="form-control" name="pass" id="inputName" placeholder="Contraseña" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label"> Repite Contraseña</label>
            <div class="col-8">
                <input type="pass" class="form-control" name="pass2" id="inputName" placeholder="Repite contraseña" >
            </div>
        </div>
        <?if (isset($_SESSION['registroError']['pass'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['pass']?> </div>
        <?}?>
        
        <!--EMAIL-->
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="inputName" placeholder="email" >
            </div>
        </div>
        <?if (isset($_SESSION['registroError']['email'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['email']?> </div>
        <?}?>
        <!--FECHA-->
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Fecha</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fecha" id="inputName" placeholder="aaaa/mm/dd" >
            </div>
        </div>
        <?if (isset($_SESSION['registroError']['fecha'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['fecha']?> </div>
        <?}?>
        <!--ROLES-->
        <div class="mb-3 row">
            <label for="rol" class="form-label">Rol</label>
            <select class="form-select form-select" name="roles" id="rol">
                <option selected value="0">Selecciona un rol</option>
                <option value="ADM01">Administrador</option>
                <option value="MOD02">Moderador</option>
                <option value="NOR03">Usuario normal</option>
            </select>
        </div>
        <?if (isset($_SESSION['registroError']['roles'])){?>
            <div class="invalid-feedback"><? echo $_SESSION['registroError']['roles']?> </div>
        <?}?>
        <!--SUBMIT-->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <input type="submit" class="btn btn-danger" name="guardar" value="Guardar"/>
            </div>
        </div>
    </form>
</div>