/* Crear Tablas
Para crear tablas se utiliza el comando CREATE TABLE nombretabla (
campos de la tabla
);

** nombre tabla= siempre va en plural y en minusculas.
** campos de la tabla= son todas aquellas "columnas" que va a llevar mi tabla y deben contener el tipo de datos que van a guardar.

*/

CREATE TABLE usuarios (
    id int(10),
    nombre varchar(20),
    apellidos varchar(50),
    email varchar(40),
    passwor varchar(30)
);

/*
RERSTRICCIONES DE INTEGRIDAD 

Al crear tablas podemos colocar estas restricciones ,

null = "El valor SI puede ser vacio"
not null = "El valor NO puede estar vacio"
default= "Se le asigna un valor por default si no viene algún dato"


Cuando queremos que el valor de un campo valla creciendo de manera automática 
lo que debemos utilizar es "auto_increment" como propiedad en el campo, y no 
debemos olvidar utilizar la CONSTRAINT para asignar dicho campo como Primary Key

*/

CREATE TABLE usuarios (
    id int(255) auto_increment not null,
    nombre varchar(20) not null,
    apellidos varchar(50) default 'Martínez',
    email varchar(40) not null,
    passwor varchar(30),
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
) ENGINE = InnoDb;

CREATE TABLE categorias (
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(255) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY (id)
) ENGINE = InnoDb;

CREATE TABLE entradas (
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) not null,
    categoria_id int(255) not null,
    titulo VARCHAR(255) not null,
    descripcion MEDIUMTEXT,
    fecha DATE NOT NULL,
    CONSTRAINT pk_entrads PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categoria (id)
) ENGINE = InnoDb;

SHOW TABLES;
DESCRIBE entradas;