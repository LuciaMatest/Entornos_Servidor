<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
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
            foreach ($listaProducto as $value) {
               echo "<tr>";
               echo "<td>".$value->codProd."</td>";
               echo "<td>".$value->nombre."</td>";
               echo "<td>".$value->descripcion."</td>";
               echo "<td>".$value->precio."</td>";
               echo "<td>".$value->stock."</td>";
               echo "<form action='./index.php'>";
               echo '<input class="btn btn-primary" type="hidden" name="codProd" value="'.$value->codProd.'">';
               echo '<td><input class="btn btn-primary" type="submit" name="ver" value="Ver"></td>';
               echo '<td><input class="btn btn-primary" type="submit" name="editar" value="Editar"></td>';
               echo '<td><input class="btn btn-primary" type="submit" name="borrar" value="Borrar"></td>';
               echo "</form>";
               echo "</tr>";
            }
        ?>
    </tbody>
</table>
    <?
    echo "<form action='./index.php'>";
    echo '<input class="btn btn-primary" type="submit" name="nuevoP" value="Nuevo Producto">';
    echo "</form>";
    ?>