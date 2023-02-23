<div class="px-5">
    <!-- Esta tabla registrará todos los partidos realizados donde podremos modificarlos, borrarlos e incluso insertar nuevo partido -->
    <h1>Partidos de <? echo $_SESSION['nombre']; ?></h1>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Jugador 1</th>
                <th scope="col">Jugador 2</th>
                <th scope="col">Resultado</th>
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
                </tr>
            <? } ?>
        </tbody>
    </table>
</div>