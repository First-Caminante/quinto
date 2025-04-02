/* 
  CREACION DE BASE DE DATOS biblioteca_php
*/
DROP DATABASE IF EXISTS biblioteca_php;
CREATE DATABASE biblioteca_php;
-- CONEXION A LA bd
USE biblioteca_php;

/*Creacion de la tabla Autor*/
CREATE TABLE autor(
	idAutor int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(15) NOT NULL,
	apePaterno varchar(15) NOT NULL,
	apeMaterno varchar(15) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=latin1;



/*Creacion de la tabla Libro*/
CREATE TABLE libro(
	idLibro int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo varchar(100) NOT NULL,
	isbn int NOT NULL,
	editorial varchar(25) NOT NULL,
	paginas int NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=latin1;




/*Creacion de la tabla autorLibro*/
CREATE TABLE autorLibro(
	idAutor int(11) NOT NULL,
	idLibro int(11) NOT NULL,
	foreign key (idAutor) references autor(idAutor),
	foreign key (idLibro) references libro(idLibro)
);
/*
 			INSERSION DE DATOS
*/
INSERT INTO autor(nombre, apePaterno, apeMaterno) VALUES
( 'Luis', 'Garcia', 'Marquez'),
( 'Claudia', 'Cedillo', 'Tovar');

INSERT INTO libro(titulo, isbn, editorial, paginas) VALUES
( 'Cien años de Soledad', '123', 'San Benito', 150),
( 'Manual SQL Server –Transact SQL', '202', 'Santa Catarina', 200),
( 'Cronicas de una muerte anunciada', '456', 'San Benito', 150);
 
 INSERT INTO autorLibro(idAutor, idLibro) VALUES
(1,1),
(2,2),
(1,3);
