<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Gestión de Categorías y Productos</title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Estilos personalizados -->
  <style>
    body {
      padding-top: 70px;
    }
  </style>
</head>

<body>
  <!-- Navbar fijo -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand ms-5" href="../public/home.php">Grupo 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenido">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContenido">
      <ul class="navbar-nav mr-auto">
        <li class="ms-5 nav-item active"><a class="nav-link" href="../public/gestion.php">Gestión de Autores</a></li>
        <li class="ms-5 nav-item"><a class="nav-link" href="../public/libros.php">Gestión de Libros</a></li>
      </ul>
    </div>
  </nav>
  <!-- Contenedor principal -->
  <div class="container">