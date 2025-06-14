/*
RENOMBRAR UNA TABLA
(MAYUSCULAS)  (minusculas)
Para renombrar una tabla tenemos la propiedad;  ALTER TABLE   nombre_tabla RENAME TO nuevo_nombre;


RENOMBRAR UNA COLUMNA
Para renombrar una columba (campo) utilizamos  ALTER TABLE  nombre_tabla CHANGE campo_modificar nuevo_nombre restricción;
*/

ALTER TABLE usuarios RENAME TO nuevos_usuarios;

SHOW TABLES

ALTER TABLE nuevos_usuarios
CHANGE apellidos apellido_paterno varchar(100) null;

DESC nuevos_usuarios;