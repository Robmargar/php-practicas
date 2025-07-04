/*

DML = se le denomina al manejo de los datos, INSERSION , ELIMINACION , ACTUALIZACION, CREACIÓN de los 
registros de las tablas en nuestra base de datos.


-Insertar datos en una Tabla (llenando todos los campos)
Para insertar datos en una tabla utilizamos el INSERT INTO "tabla a llenar" VALUES (valores separados por coma y en orden)

-Insertar datos en una Tabla (llenando campos en especifico)
Para insertar datos en una tabla utilizamos el INSERT INTO "tabla a llenar" ('campo1','campo3','campo4') VALUES ('valor_campo1','valor_campo3','valor_campo4')
*/
SHOW TABLES;

INSERT INTO
    usuarios
VALUES (
        null,
        'Roberto',
        'Mar Gar',
        'roberto@roberto.com',
        'chanita'
    );

INSERT INTO
    usuarios
VALUES (
        null,
        'Alberto',
        'Mar Gar',
        'alberto@roberto.com',
        'chanitadd'
    );

INSERT INTO
    usuarios
VALUES (
        null,
        'Juanito',
        'Mar Gar',
        'juanito@roberto.com',
        'chanitawwww'
    );

INSERT INTO
    usuarios
VALUES (
        null,
        'Pedro',
        'Mar Gar',
        'pedro@roberto.com',
        'chanitagggg'
    );

SELECT * FROM usuarios;