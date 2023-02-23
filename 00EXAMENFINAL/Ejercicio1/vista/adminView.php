<div class="px-5">
    <!-- Esta tabla registrará todos los partidos realizados donde podremos modificarlos, borrarlos e incluso insertar nuevo partido -->
    <h1>Partidos realizados</h1>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Jugador 1</th>
                <th scope="col">Jugador 2</th>
                <th scope="col">Resultado</th>
                <th scope="col">Modificar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?
            foreach ($partido as $value) { ?>
                <tr>
                    <td><? echo $value['fecha'] ?></td>
                    <td><? echo $value['jug1'] ?></td>
                    <td><? echo $value['jug2'] ?></td>
                    <td><? echo $value['resultado'] ?></td>
                    <form action="./index.php" method="post">
                        <td>
                            <input type="submit" name="modificar" class="btn btn-primary" value="Modificar">
                        </td>
                        <td>
                            <input type="submit" name="borrar" class="btn btn-primary" value="Borrar">
                        </td>
                        <input type="hidden" name="id" value="<? echo $value['id'] ?>">
                    </form>
                </tr>
            <? } ?>
        </tbody>
    </table>
    <form action="./index.php" method="post">
        <input type="submit" name="insertar" class="btn btn-primary" value="Insertar">
    </form>
</div>