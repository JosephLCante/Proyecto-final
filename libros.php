<?php
include 'config.php';
include 'templates/header.php';


try {
    $sql = 'SELECT * FROM titulos';
    $stmt = $pdo->query($sql);
    $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Listado de Libros</h1>
    <div class="table-responsive">
       
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar libros...">
        </div>
        <table class="table table-hover table-striped mt-4" id="booksTable">
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>ID Pub</th>
                    <th>Precio</th>
                    <th>Avance</th>
                    <th>Total Ventas</th>
                    <th>Notas</th>
                    <th>Fecha Pub</th>
                    <th>Contrato</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($libro['titulo'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['tipo'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['id_pub'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['precio'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['avance'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['total_ventas'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['notas'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['fecha_pub'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($libro['contrato'] ?? 'N/A'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'templates/footer.php'; ?>


<script src="js/busqueda_lib.js"></script>
