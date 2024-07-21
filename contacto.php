<?php
include 'config.php';
include 'templates/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    try {
        $sql = 'INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (:correo, :nombre, :asunto, :comentario)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':correo' => $correo,
            ':nombre' => $nombre,
            ':asunto' => $asunto,
            ':comentario' => $comentario
        ]);
        // Redirige a la página de agradecimiento
        header('Location: gracias.php');
        exit();
    } catch (PDOException $e) {
        $message = 'Error: ' . $e->getMessage();
    }
}
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Formulario de Contacto</h1>
    <?php if (!empty($message)): ?>
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="contacto.php" method="post" class="bg-light p-4 rounded shadow">
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
