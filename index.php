<?php include 'templates/header.php'; ?>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido a la Librería Online</h1>
        <p class="lead">Consulta nuestro catálogo de libros y autores, o contáctanos para más información.</p>
        <hr class="my-4">
        <p>Explora nuestras secciones:</p>
        <a class="btn btn-primary btn-lg" href="libros.php" role="button">Ver Libros</a>
        <a class="btn btn-secondary btn-lg" href="autores.php" role="button">Ver Autores</a>
        <a class="btn btn-info btn-lg" href="contacto.php" role="button">Contáctanos</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="img/libros.jpg" class="card-img-top" alt="Libros">
                <div class="card-body">
                    <h5 class="card-title">Catálogo de Libros</h5>
                    <p class="card-text">Explora nuestra amplia colección de libros de diferentes géneros y autores.</p>
                    <a href="libros.php" class="btn btn-primary">Ver Libros</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/autores.jpg" class="card-img-top" alt="Autores">
                <div class="card-body">
                    <h5 class="card-title">Nuestros Autores</h5>
                    <p class="card-text">Conoce a los autores que hacen posible nuestra colección de libros.</p>
                    <a href="autores.php" class="btn btn-secondary">Ver Autores</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/contacto.jpg" class="card-img-top" alt="Contacto">
                <div class="card-body">
                    <h5 class="card-title">Contáctanos</h5>
                    <p class="card-text">¿Tienes alguna pregunta? Ponte en contacto con nosotros.</p>
                    <a href="contacto.php" class="btn btn-info">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
