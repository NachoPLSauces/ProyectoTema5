-- La contraseña de los usuarios, es el codUsuario concatenado con el password, en este caso paso. [$usuario . $pass]
-- Base de datos a usar
USE DAW202DBProyectoTema5;

-- Introduccion de datos dentro de la tabla creada
INSERT INTO Departamento(CodDepartamento,DescDepartamento,FechaCreacionDepartamento, VolumenNegocio) VALUES
    ('INF', 'Departamento de informatica',1606149671, 50),
    ('VEN', 'Departamento de ventas',1606149671, 800000),
    ('CON', 'Departamento de contabilidad',1606149671, 900000),
    ('MAT', 'Departamento de matematicas',1606149671, 80000000),
    ('CAT', 'Departamento de gatos',1606149671, 12584631268);
-- 1606149671 -> 23-nov-2020 ~17:41 --

-- El tipo de usuario es "usuario" como predeterminado, despues añado un admin --
INSERT INTO Usuario(CodUsuario, DescUsuario, Password) VALUES
    ('nacho','Nacho',SHA2('nachopaso',256)),
    ('raul','Raul',SHA2('raulpaso',256)),
    ('luis','Luis',SHA2('luispaso',256)),
    ('arkaitz','Arkaitz',SHA2('arkaitzpaso',256)),
    ('cristinaM','Cristinam',SHA2('cristinampaso',256)),
    ('susana','Susana',SHA2('susanapaso',256)),
    ('sonia','Sonia',SHA2('soniapaso',256)),
    ('miguelangel','Miguelangel',SHA2('miguelangelpaso',256)),
    ('nereaA','NereaA',SHA2('nereaApaso',256)),
    ('bea','Bea',SHA2('beapaso',256)),
    ('nereaN','NereaN',SHA2('nereaNpaso',256)),
    ('cristinaN','CristinaN',SHA2('cristinaNpaso',256)),
    ('elena','Elena',SHA2('elenapaso',256)),
    ('javier','Javier',SHA2('javierpaso',256)),
    ('rodrigo','Rodrigo',SHA2('rodrigopaso',256)),
    ('heraclio','Heraclio',SHA2('heracliopaso',256)),
    ('amor','Amor',SHA2('amorpaso',256)),
    ('leticia','Leticia',SHA2('leticiapaso',256)),
    ('antonio','Antonio',SHA2('antoniopaso',256));

-- Usuario con el rol admin --
INSERT INTO Usuario(CodUsuario, DescUsuario, Password, Perfil) VALUES ('admin','admin',SHA2('adminpaso',256), 'administrador');