<?php
include 'config.php';
include 'templates/header.php';

// Consulta para obtener todos los autores
$sql = 'SELECT * FROM autores';
$stmt = $pdo->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Listado de Autores</h1>
    <div class="table-responsive">
        <!-- Filtro de búsqueda -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar autores...">
        </div>
        <table class="table table-hover table-striped mt-4" id="authorsTable">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>País</th>
                    <th>Código Postal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autores as $autor): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($autor['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($autor['apellido']); ?></td>
                        <td><?php echo htmlspecialchars($autor['telefono']); ?></td>
                        <td><?php echo htmlspecialchars($autor['direccion']); ?></td>
                        <td><?php echo htmlspecialchars($autor['ciudad']); ?></td>
                        <td><?php echo htmlspecialchars($autor['estado']); ?></td>
                        <td><?php echo htmlspecialchars($autor['pais']); ?></td>
                        <td><?php echo htmlspecialchars($autor['cod_postal']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'templates/footer.php'; ?>

<script src="js/busqueda_aut.js"></script>
