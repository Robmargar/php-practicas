/*
Tenemos diferentes funciones para ejecutar en nuestras consultas agrupadas algunas son:

AVG = sacar la media del grupo
COUNT = contar el numero de elementos
MAX = Valor maximo del grupo
MIN = Valor minimo del grupo
SUM = Sumar todo el contenido del grupo

*/

SELECT * FROM entradas;

SELECT AVG(id) AS 'Media de entradas' FROM entradas;

SELECT COUNT(titulo) FROM entradas;

SELECT MAX(id) AS 'Id mas alto', titulo, usuario_id FROM entradas;

SELECT MIN (id) AS 'Id mas bajo', titulo, usuario_id FROM entradas;

SELECT SUM(id) AS 'Suma de ids' FROM entradas;