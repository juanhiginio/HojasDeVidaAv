SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
    `id_usuario` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre_usuario` VARCHAR(100) NOT NULL,
    `usuario_usuario` VARCHAR(100) NOT NULL,
    `contrasena_usuario` VARCHAR(100) NOT NULL,
    `rol_usuario` VARCHAR(100) NOT NULL
);

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `usuario_usuario`, `contrasena_usuario`, `rol_usuario`) VALUES (1, 'Juan Diego Higinio Aranzazu', 'juanhiginio', 'juandiegohiginio123', 'Administrador');
INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `usuario_usuario`, `contrasena_usuario`, `rol_usuario`) VALUES (2, 'Juan Camilo Bueno Villada', 'juanCamiloB', '321', 'Editor');



CREATE TABLE `datoshardware` (
    `id_registro` INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `marca` VARCHAR(50) NOT NULL,
    `activoFijo` VARCHAR(50) NOT NULL,
    `serial` VARCHAR(50) NOT NULL
);

INSERT INTO `datoshardware` (`id_registro`, `marca`, `activoFijo`, `serial`) VALUES (1, 'DELL', 'ACAM-0000', 'S1E2R3I4A5L') ;




CREATE TABLE `datosusuario` (
    `id_registro` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `responsable` VARCHAR(100) NOT NULL,
    `proceso` VARCHAR(50) NOT NULL
);

INSERT INTO `datosusuario` (`id_registro`, `responsable`, `proceso`) VALUES (1, 'Cuentas Medicas', 'Mantenimiento Preventivo');



CREATE TABLE `observacioncorrectiva` (
    `id_registro` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `tipoMantenimiento` VARCHAR(50) NOT NULL,
    `realizadoPor` VARCHAR(50) NOT NULL,
    `fechaMantenimiento` VARCHAR(50) NOT NULL,
    `problemaPresentado` VARCHAR(1000) NOT NULL,
    `diagnostico` VARCHAR(1000) NOT NULL,
    `solucion` VARCHAR(1000) NOT NULL,
    `observaciones` VARCHAR(3000) NOT NULL
);

INSERT INTO `observacioncorrectiva` (`id_registro`, `tipoMantenimiento`, `realizadoPor`, `fechaMantenimiento`, `problemaPresentado`, `diagnostico`, `solucion`, `observaciones`) VALUES (1, 'Correctivo', 'Juan Diego Higinio Aranzazu', '01 Enero 2025', 'Equipo demasiado lento', 'El equipo tiene disco duro mecanico', 'Se hace reemplazo del disco por uno de estado solido', 'El equipo queda trabajando de manera rápida y eficiente');



CREATE TABLE `observacionpreventiva` (
    `id_registro` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,    `tipoMantenimiento` VARCHAR(50) NOT NULL,
    `realizadoPor` VARCHAR(50) NOT NULL,
    `fechaMantenimiento` VARCHAR(50) NOT NULL,
    `observaciones` VARCHAR(3000) NOT NULL
);

INSERT INTO `observacionpreventiva` (`id_registro`, `tipoMantenimiento`, `realizadoPor`, `fechaMantenimiento`, `observaciones`) VALUES (1, 'Preventivo', 'Orlando Casanare', '11 Enero 2028', 'Se realiza mantenimiento preventivo y el equipo queda trabajando de manera rápida y eficiente');