<table>
    <thead>
        <th>Cod. Producto</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Borrar</th>
    </thead>
    <tbody>
        <?
            foreach ($lista as $value) {
               echo "<tr>";
               echo "<td>".$value->codProd."</td>";
               echo "<td>".$value->nombre."</td>";
               echo "<td>".$value->codProd."</td>";
               echo "<td>".$value->codProd."</td>";
               echo "<td>".$value->codProd."</td>";
               echo "<form action='./index.php'></form>";
               echo "</td>";
            }
        ?>
    </tbody>
</table>