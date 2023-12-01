-- Crear la base de datos (si no existe)
CREATE DATABASE IF NOT EXISTS login_register;

-- Usar la base de datos
USE login_register;

-- Crear la tabla para almacenar la información del usuario
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `ap_paterno` VARCHAR(45) NOT NULL,
  `ap_materno` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  UNIQUE KEY `email_UNIQUE` (`email`)
);

-- Insertar datos de ejemplo con nombres aleatorios
INSERT INTO `usuarios` (`nombre`, `ap_paterno`, `ap_materno`, `email`, `contraseña`) VALUES
('Juan', 'López', 'Gómez', 'juan.lopez@example.com', 'contraseña123'),
('María', 'Martínez', 'García', 'maria.martinez@example.com', 'clave456'),
('Carlos', 'Fernández', 'Rodríguez', 'carlos.fernandez@example.com', 'p4ssw0rd'),
('Laura', 'Gutiérrez', 'Hernández', 'laura.gutierrez@example.com', 'secreto789'),
('Alejandro', 'Díaz', 'Pérez', 'alejandro.diaz@example.com', 'password123'),
('Ana', 'Sánchez', 'Romero', 'ana.sanchez@example.com', 'clave12345'),
('Pedro', 'Ramírez', 'Vega', 'pedro.ramirez@example.com', 'contraseña678'),
('Sofía', 'Gómez', 'López', 'sofia.gomez@example.com', 'clave7890'),
('Daniel', 'Hernández', 'Jiménez', 'daniel.hernandez@example.com', 'passwordabcd'),
('Verónica', 'Torres', 'Serrano', 'veronica.torres@example.com', 'secretoxyz'),
('Ernesto Missael', 'Contreras', 'Emigdio', 'eresto08@gmail.com', '312908ER');
