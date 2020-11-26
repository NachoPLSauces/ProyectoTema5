-- Crear base de datos DAW202DBDepartamentos

CREATE DATABASE IF NOT EXISTS DAW202DBProyectoTema5;

CREATE USER IF NOT EXISTS 'usuarioDAW202DBProyectoTema5'@'%' identified BY 'paso';

USE DAW202DBProyectoTema5;

-- Crear tabla Departamento

CREATE TABLE IF NOT EXISTS Departamento (
    CodDepartamento CHAR(3) PRIMARY KEY,
    DescDepartamento VARCHAR(255) NOT NULL,
    FechaBajaDepartamento INT NULL,
    FechaCreacionDepartamento INT NOT NULL,    
    VolumenNegocio FLOAT NOT NULL
) ENGINE=INNODB;


-- Crear tabla Usuario

CREATE TABLE IF NOT EXISTS Usuario (
    CodUsuario VARCHAR(15) PRIMARY KEY,
    DescUsuario VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Perfil enum('administrador', 'usuario') DEFAULT 'usuario', 
    NumConexiones INT DEFAULT 0,
    FechaHoraUltimaConexion INT,
    ImagenUsuario mediumblob
) ENGINE=INNODB;

-- Dar permisos al usuario usuarioDAWDBDepartamentos

GRANT ALL PRIVILEGES ON DAW202DBProyectoTema5.* TO 'usuarioDAW202DBProyectoTema5'@'%';