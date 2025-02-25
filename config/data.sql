-- Crear la tabla de autor
CREATE TABLE IF NOT EXISTS autor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(100) NOT NULL
);

-- Crear la tabla de productos (relacionada con categorias)
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- Insertar 10 registros de ejemplo en la tabla autor
INSERT INTO autor (nombre, nacionalidad) VALUES 
('Gabriel García Márquez', 'Colombiano'),
('Jorge Luis Borges', 'Argentino'),
('Pablo Neruda', 'Chileno'),
('Julio Cortázar', 'Argentino'),
('Mario Vargas Llosa', 'Peruano'),
('Isabel Allende', 'Chilena'),
('Octavio Paz', 'Mexicano'),
('Carlos Fuentes', 'Mexicano'),
('Alfonsina Storni', 'Argentina'),
('Rubén Darío', 'Nicaragüense')

-- Insertar 10 registros de ejemplo en la tabla productos
INSERT INTO productos (nombre, descripcion, precio) VALUES 
('Cien años de soledad', 'Novela clásica del realismo mágico', 25.99),
('Ficciones', 'Colección de cuentos surrealistas', 19.50),
('Veinte poemas de amor y una canción desesperada', 'Poesía romántica', 15.75),
('Rayuela', 'Novela experimental y vanguardista', 22.00),
('La ciudad y los perros', 'Novela sobre la vida en un colegio militar', 18.95),
('La casa de los espíritus', 'Novela familiar con elementos mágicos', 20.50),
('El laberinto de la soledad', 'Ensayo sobre la identidad mexicana', 14.99),
('La región más transparente', 'Novela sobre la sociedad mexicana', 17.25),
('Languidez', 'Poesía modernista', 12.50),
('Azul', 'Obra fundamental del modernismo literario', 16.80);
