-- Crear base de datos DAW202DBDepartamentos

CREATE DATABASE IF NOT EXISTS DAW202DBDepartamentos;

-- Crear el usuario usuarioDAW202DBDepartamentos / paso

CREATE USER IF NOT EXISTS 'usuarioDAW202DBDepartamentos'@'%' identified BY 'P@ssw0rd';

-- Usar base de datos DAW202DBDepartamentos

USE DAW202DBDepartamentos;

-- Crear tabla Departamento con los campos (PK)CodDepartamento (3 letras mayusculas), DescDepartamento (max. 255 caracteres),FechaBaja, VolumenNegocio (float-€)

CREATE TABLE IF NOT EXISTS Departamento (
    CodDepartamento CHAR(3) PRIMARY KEY,
    DescDepartamento VARCHAR(255) NOT NULL,
    FechaBaja DATE NULL,
    Volumennegocio FLOAT NULL

) ENGINE=INNODB;

-- Dar permisos al usuario usuarioDAWDBDepartamentos

GRANT ALL PRIVILEGES ON DAW202DBDepartamentos.* TO 'usuarioDAW202DBDepartamentos'@'%';