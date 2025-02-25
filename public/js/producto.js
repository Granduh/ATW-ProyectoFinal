// Ruta base de la API (ajústala según tu entorno).
const apiUrl = 'http://localhost/proyecto/public';

// Al cargar la página, se ejecuta la función para obtener todos los productos.
document.addEventListener('DOMContentLoaded', () => getProductos());

/**
 * Obtiene todos los productos desde la API y actualiza la tabla.
 */
const getProductos = () => {
  axios.get(`${apiUrl}/productos`)
    .then(response => {
      const productos = response.data;
      const tbody = document.querySelector('#productosTable tbody');
      tbody.innerHTML = '';
      productos.forEach(producto => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${producto.id}</td>
          <td>${producto.nombre}</td>
          <td>${producto.descripcion}</td>
          <td>${producto.precio}</td>
          <td>
            <button class="btn btn-sm btn-info" onclick="editProducto(${producto.id})">Editar</button>
            <button class="btn btn-sm btn-danger" onclick="deleteProducto(${producto.id})">Eliminar</button>
          </td>
        `;
        tbody.appendChild(tr);
      });
    })
    .catch(error => console.error("Error en la petición:", error));
};

/**
 * Abre el modal para agregar un nuevo producto.
 */
const openModalProductos = () => {
  document.getElementById('productoForm').reset();
  document.getElementById('productoId').value = '';
  document.getElementById('productoModalLabel').innerText = 'Agregar Producto';
};


/**
 * Envía el formulario para crear o actualizar un producto.
 */


document.getElementById('productoForm').addEventListener('submit', e => {
  e.preventDefault();
  const id = document.getElementById('productoId').value;
  const nombre = document.getElementById('productoNombre').value;
  const descripcion = document.getElementById('productoDescripcion').value;
  const precio = document.getElementById('productoPrecio').value;

  if (id) {
    axios.put(`${apiUrl}/productos`, { id, nombre, descripcion, precio})
      
    .then(response => {
        console.log('Respuesta del servidor (PUT):', response);
        $('#productoModal').modal('hide');
        getProductos();
      })
      .catch(error => console.error('Error en la solicitud PUT:', error));
  } else {
    axios.post(`${apiUrl}/productos`, { nombre, descripcion, precio})
      .then(response => {
        console.log('Respuesta del servidor (POST):', response);
        $('#productoModal').modal('hide');
        getProductos();
      })
      .catch(error => console.error('Error en la solicitud POST:', error));
  }
});

/**
 * Carga los datos de un producto en el formulario para editar.
 */
const editProducto = id => {
  axios.get(`${apiUrl}/productos/${id}`)
    .then(response => {
      const producto = response.data;
      document.getElementById('productoId').value = producto.id;
      document.getElementById('productoNombre').value = producto.nombre;
      document.getElementById('productoDescripcion').value = producto.descripcion;
      document.getElementById('productoPrecio').value = producto.precio;
      document.getElementById('productoModalLabel').innerText = 'Editar Producto';
      $('#productoModal').modal('show');
    })
    .catch(error => console.error(error));
};

/**
 * Elimina un producto.
 */
const deleteProducto = id => {
  if (confirm('¿Estás seguro de eliminar este producto?')) {
    axios.delete(`${apiUrl}/productos`, { data: { id } })
      .then(response => getProductos())
      .catch(error => console.error(error));
  }
};
