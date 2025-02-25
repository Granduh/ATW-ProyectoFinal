<?php
include 'templates/header.php';
?>

<h1>Gestion de Libros</h1>
<div class="mb-3">
  <button class="btn btn-primary" data-toggle="modal" data-target="#productoModal" onclick="openModalProductos();">Agregar Libro</button>
</div>
<table class="table table-bordered" id="productosTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Se llenarán dinámicamente mediante JavaScript -->
  </tbody>
</table>

<!-- Modal para Autores -->
<div class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="productoModalLabel" class="modal-title">Agregar Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="productoForm">
          <input type="hidden" id="productoId">
          <div class="form-group">
            <label for="productoNombre">Nombre</label>
            <input type="text" class="form-control" id="productoNombre" required>
          </div>
          <div class="form-group">
            <label for="productoDescripcion">Descripción</label>
            <input type="text" class="form-control" id="productoDescripcion" required>
          </div>
          <div class="form-group">
            <label for="productoPrecio">Precio</label>
            <input type="" class="form-control" id="productoPrecio" required>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="js/producto.js"></script>

<?php include 'templates/footer.php'; ?>