/*
Las funciones para texto son 

UPPER(nombre del campo) = Para pasar todo a mayuscula
LOWER(nombre del campo) = Para pasar todo a minuscula

CONCAT (campo1,'separador', campo2) = para unir campos y si es necesario colocar un separador (espacio, linea central, guion bajo, diagonal)
LENGTH (campo) = me coloca la longitud de una cadena

TRIM (' ', campo1, ' ', campo2, ' ') = elimina los espacios no necesarios en este ejemplo se mantiene el espacio central y quita el espacio inicial y final puesto que no son necesarios

*/

SELECT UPPER(nombre) FROM usuarios;

SELECT LOWER(apellidos) FROM usuarios;

SELECT CONCAT(apellidos, ' ', nombre) AS Concatenación FROM usuarios;

SELECT LENGTH(
        CONCAT(apellidos, ' ', nombre)
    ) AS Concatenación
FROM usuarios;

SELECT UPPER(
        CONCAT(apellidos, ' ', nombre)
    ) AS Concatenación
FROM usuarios;