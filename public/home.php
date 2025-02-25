<?php
include 'templates/header.php';
?>

<?php
$data = [
    'nombre_proyecto' => 'Gestor Bibliotecario MVC',
    'integrantes' => [
        [
            'nombre' => 'Andres Toledo',
            'rol' => 'Desarrollador Backend',
            'id_espe' => 'A01234567'
        ],
        [
            'nombre' => 'Carlos Yánez',
            'rol' => 'Desarrollador Frontend',
            'id_espe' => 'B98765432'
        ],
        [
            'nombre' => 'Luis Flores',
            'rol' => 'Desarrollador Backend',
            'id_espe' => 'L00409476'
        ]
    ],
    'descripcion' => 'Aplicación web para gestión de libros y autores desarrollada con:',
    'tecnologias' => ['PHP MVC', 'MySQL', 'Bootstrap 5', 'Axios', 'HTACCESS']
];
?>

<div class="container py-5">
    <!-- Encabezado -->
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary mb-3">
            <i class="bi bi-book-half"></i> <?= $data['nombre_proyecto'] ?>
        </h1>
        <p class="lead"><?= $data['descripcion'] ?></p>
        <div class="d-flex justify-content-center gap-2">
            <?php foreach ($data['tecnologias'] as $tech): ?>
                <span class="badge bg-secondary"><?= $tech ?></span>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Tarjeta de Integrantes -->
    <div class="card shadow-lg mx-auto" style="max-width: 800px;">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="bi bi-people-fill"></i> Nuestro Equipo</h3>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($data['integrantes'] as $miembro): ?>
                    <div class="col">
                        <div class="card h-100 border-primary">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary"><?= $miembro['nombre'] ?></h5>
                                <p class="card-text text-muted small"><?= $miembro['rol'] ?></p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <small class="text-muted"><?= $miembro['id_espe'] ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Sección de navegación -->
    <div class="text-center mt-5">
        <div class="btn-group" role="group">
            <a href="../public/libros.php" class="btn btn-outline-primary btn-lg">
                <i class="bi bi-book"></i> Gestión de Libros
            </a>
            <a href="../public/gestion.php" class="btn btn-outline-primary btn-lg">
                <i class="bi bi-person-badge"></i> Gestión de Autores
            </a>
        </div>
    </div>
</div>



<?php include 'templates/footer.php'; ?>