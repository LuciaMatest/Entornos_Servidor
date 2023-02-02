<div class="container">
    <form action="./index.php" method="post">
        <!--Nombre-->
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<? echo $usuario->nombre ?>">
            </div>
        </div>
        <!--Usuario-->
        <div class="mb-3 row">
            <label for="user" class="col-4 col-form-label">Usuario</label>
            <div class="col-8">
                <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" value="<? echo $usuario->usuario ?>" readonly>
            </div>
        </div>
        <!--Contraseña-->
        <? if ($_SESSION['accion'] == 'editar') { ?>
            <div class="mb-3 row">
                <label for="pass" class="col-4 col-form-label">Contraseña</label>
                <div class="col-8">
                    <input type="pass" class="form-control" name="pass" id="pass" placeholder="Contraseña">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pass2" class="col-4 col-form-label">Repetir contraseña</label>
                <div class="col-8">
                    <input type="pass" class="form-control" name="pass2" id="pass2" placeholder="Repite la contraseña">
                </div>
            </div>
        <?
        }
        ?>
        <!--Email-->
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="Correo" value="<? echo $usuario->correo ?>">
            </div>
        </div>
        <!--Rol-->
        <div class="mb-3 row">
            <label for="rol" class="form-label">Rol</label>
            <select class="form-select form-select-lg" name="roles" id="rol">
                <option selected value="0">Selecciona un rol</option>
                <option value="ADM01">Administrador</option>
                <option value="MOD02">Moderador</option>
                <option value="NOR03">Usuario normal</option>
            </select>
        </div>
        <!--Submits-->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <?
                if ($_SESSION['accion'] == 'editar') { ?>
                    <input type="submit" class="btn btn-danger" name="guardar" value="Guardar" />

                <? }
                ?>
                <?
                if ($_SESSION['accion'] == 'ver') { ?>
                    <input type="submit" class="btn btn-danger" name="editar" value="Editar" />

                <? }
                ?>
            </div>
        </div>
    </form>
</div>