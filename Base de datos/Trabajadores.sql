-- Crear la base de datos (si no existe)
CREATE DATABASE IF NOT EXISTS trabajadores;

-- Usar la base de datos
USE trabajadores;

-- Eliminar la tabla si existe
DROP TABLE IF EXISTS `personal`;

-- Crear la tabla para almacenar la información del trabajador
CREATE TABLE `personal` (
  `id_trabajador` INT NOT NULL,
  `RFC` VARCHAR(13) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `ap_paterno` VARCHAR(45) NOT NULL,
  `ap_materno` VARCHAR(45) NOT NULL,
  `domicilio` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_trabajador`),
  UNIQUE KEY `RFC_UNIQUE` (`RFC`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `telefono_UNIQUE` (`telefono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos de ejemplo en la tabla personal
INSERT INTO `personal` VALUES 
(21, 'MAPI900320R8B', 'María', 'Martínez', 'Pérez', 'Calle Morelos #789, Colonia Reforma, Puebla', '8124681357', 'maria.martinez@outlook.com'),
(104, 'FLOM930801DN4', 'Mariana', 'Flores', 'Molina', 'Calle Benito Juárez #789, Colonia Los Pinos, Guerrero', '4449876544', 'mariana.flores@outlook.com'),
(136, 'PARE950418TIM', 'Javier', 'Paredes', 'Reyes', 'Calle López Mateos #890, Colonia La Loma, Nayarit', '6671234527', 'javier.paredes@outlook.com'),
(147, 'RUAR810113RI5', 'Andrés', 'Ruiz', 'Rodríguez', 'Calle Zaragoza #890, Colonia La Paz, Baja California Sur', '6862468012', 'andres.ruiz@outlook.com'),
(173, 'RAMS9812319ME', 'Sofía', 'Ramírez', 'Martínez', 'Calle Allende #123, Colonia San Miguel, Querétaro', '6142468012', 'sofia.ramirez@yahoo.com'),
(226, 'ROLJ880512GH6', 'Juan', 'Rodríguez', 'López', 'Calle Juárez #456, Colonia Juárez, Guanajuato', '3398765432', 'juan.rodriguez@gmail.com'),
(292, 'LOGC850417G2M', 'Carlos', 'López', 'García', 'Calle Zaragoza #234, Colonia Los Pinos, Jalisco', '6647890123', 'carlos.lopez@yahoo.com'),
(329, 'MOVG960530JE4', 'Gabriela', 'Morales', 'Vargas', 'Calle Morelos #567, Colonia Del Valle, Ciudad de México', '4449876543', 'gabriela.morales@gmail.com'),
(349, 'MENV930518H7M', 'Victoria', 'Mendoza', 'Nava', 'Calle Morelos #123, Colonia Las Palmas, Chiapas', '9981231567', 'victoria.mendoza@yahoo.com'),
(367, 'AGUX921205ME6', 'Ximena', 'Aguilar', 'Gutiérrez', 'Calle Allende #567, Colonia Santa Anita, Jalisco', '9627892345', 'ximena.aguilar@gmail.com'),
(561, 'DERI950623UN4', 'Ricardo', 'Delgado', 'Rivera', 'Calle Zaragoza #456, Colonia San Isidro, Durango', '6624567840', 'ricardo.delgado@gmail.com'),
(564, 'VAGO910502YM3', 'Alejandro', 'Vargas', 'González', 'Calle López Mateos #456, Colonia Las Rosas, Baja California', '9517892345', 'alejandro.vargas@gmail.com'),
(602, 'HERN921205ER7', 'Natalia', 'Herrera', 'Navarro', 'Calle Benito Juárez #123, Colonia Reforma, Oaxaca', '9617892345', 'natalia.herrera@yahoo.com'),
(631, 'GAHA920601GCF', 'Ana', 'García', 'Hernández', 'Calle Hidalgo #123, Colonia Centro, Ciudad de México', '5512345678', 'ana.garcia@yahoo.com'),
(637, 'GOSL931006MF7', 'Laura', 'González', 'Sánchez', 'Calle Benito Juárez #567, Colonia San Pedro, Nuevo León', '2224567890', 'laura.gonzalez@gmail.com'),
(710, 'TORR890829L5X', 'Eduardo', 'Torres', 'Ramírez', 'Calle Madero #890, Colonia Coyoacán, Ciudad de México', '3339876543', 'eduardo.torres@outlook.com'),
(752, 'FEMJ890825JI5', 'José', 'Fernández', 'Morales', 'Calle Juárez #234, Colonia Centro, Veracruz', '6624567890', 'jose.fernandez@yahoo.com'),
(816, 'GUZI960825GY0', 'Isabella', 'Guzmán', 'Ibarra', 'Calle Allende #789, Colonia Santa Fe, Querétaro', '4774567890', 'isabella.guzman@outlook.com'),
(836, 'JIMD930216V4B', 'Daniel', 'Jiménez', 'Díaz', 'Calle López Mateos #234, Colonia El Rosario, Sinaloa', '3229876543', 'daniel.jimenez@yahoo.com'),
(900, 'MORM941229O8S', 'Guillermo', 'Morales', 'Mendoza', 'Calle Juárez #890, Colonia La Libertad, Tabasco', '9617092345', 'guillermo.morales@outlook.com'),
(924, 'RIOS890715B5N', 'Francisco', 'Ríos', 'Santos', 'Calle Madero #234, Colonia El Carmen, Hidalgo', '6862464012', 'francisco.rios@yahoo.com'),
(926, 'CALV950315JW6', 'Valeria', 'Castro', 'López', 'Calle Hidalgo #789, Colonia Juarez, Chihuahua', '9981234567', 'valeria.castro@outlook.com'),
(931, 'ORCC950712HRH', 'Camila', 'Ortiz', 'Castañeda', 'Calle Hidalgo #567, Colonia Los Alamos, Sonora', '6642468012', 'camila.ortiz@gmail.com'),
(934, 'MEND920615MER', 'Fernanda', 'Méndez', 'Dominguez', 'Calle Hidalgo #123, Colonia San Francisco, Tamaulipas', '4774567790', 'fernanda.mendez@yahoo.com'),
(988, 'SANC940712SL2', 'Miguel', 'Sánchez', 'Cortés', 'Calle Madero #456, Colonia San Juan, Michoacán', '6671234567', 'miguel.sanchez@gmail.com');

