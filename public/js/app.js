// Ruta base de la API (ajústala según tu entorno).
const apiUrl = 'http://localhost/proyecto/public';

// Al cargar la página, se ejecuta la función para obtener todos los autores.
document.addEventListener('DOMContentLoaded', () => getAutores());

/**
 * Obtiene todas los autores desde la API y actualiza la tabla.
 */
const getAutores = () => {
  axios.get(`${apiUrl}/autores`)
    .then(response => {
      const autores = response.data;
      const tbody = document.querySelector('#autoresTable tbody');
      tbody.innerHTML = '';
      autores.forEach(autor => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${autor.id}</td>
          <td>${autor.nombre}</td>
          <td>${autor.nacionalidad}</td>
          <td>
            <button class="btn btn-sm btn-info" onclick="editAutor(${autor.id})">Editar</button>
            <button class="btn btn-sm btn-danger" onclick="deleteAutor(${autor.id})">Eliminar</button>
          </td>
        `;
        tbody.appendChild(tr);
      }); 
    })
    .catch(error => console.error(error));
};

/**
 * Abre el modal para agregar un nuevo autor.
 */
const openModal = () => {
  document.getElementById('autorForm').reset();
  document.getElementById('autorId').value = '';
  document.getElementById('autorModalLabel').innerText = 'Agregar Autor';
};



/**
 * Envía el formulario para crear o actualizar un autor.
 */
document.getElementById('autorForm').addEventListener('submit', e => {
  e.preventDefault();
  const id = document.getElementById('autorId').value;
  const nombre = document.getElementById('autorNombre').value;
  const nacionalidad = document.getElementById('autorNacionalidad').value;

  console.log('Datos del formulario:', { id, nombre, nacionalidad });

  if (id) {
    axios.put(`${apiUrl}/autores`, { id, nombre, nacionalidad })
      .then(response => {
        console.log('Respuesta del servidor (PUT):', response);
        $('#autorModal').modal('hide');
        getAutores();
      })
      .catch(error => console.error('Error en la solicitud PUT:', error));
  } else {
    axios.post(`${apiUrl}/autores`, { nombre, nacionalidad })
      .then(response => {
        console.log('Respuesta del servidor (POST):', response);
        $('#autorModal').modal('hide');
        getAutores();
      })
      .catch(error => console.error('Error en la solicitud POST:', error));
  }
});

/**
 * Carga los datos de un autor en el formulario para editar.
 */
const editAutor = id => {
  axios.get(`${apiUrl}/autores/${id}`)
    .then(response => {
      console.log(response);
      const autor = response.data;
      document.getElementById('autorId').value = autor.id;
      document.getElementById('autorNombre').value = autor.nombre;
      document.getElementById('autorNacionalidad').value = autor.nacionalidad;
      document.getElementById('autorModalLabel').innerText = 'Editar Autor';
      $('#autorModal').modal('show');
    })
    .catch(error => console.error(error));
};

const deleteAutor = id => {
  if (confirm('¿Estás seguro de eliminar este autor?')) {
    axios.delete(`${apiUrl}/autores`, { data: { id } })
      .then(response => getAutores())
      .catch(error => console.error(error));
  }
};
