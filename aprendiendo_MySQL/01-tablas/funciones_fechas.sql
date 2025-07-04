/*
En las funciones para fecha encontramos las siguientes:

CURDATE = Current Date (fecha actual) la cual nos coloca un nuevo campo con la fecha en la que ejecutamos el comando
DATEDIF(fecha1, fecha2) = muestra los días que hay de diferencia entre ambas fechas.
DAYNAME(fecha)= nos dice el nombre del día.
DAYOFWEEK = nos muestra unicamente el dia de la semana que tenga la fecha
DAYOFMONTH = nos muestra unicamente el dia del mes que tenga la fecha
DAYOFYEAR = nos muestra unicamente el dia del año que tenga la fecha

DAY (fecha) = muestra el mes 
MONTH (fecha) = muestra el mes 
YEAR(fecha) = muestra el año

CURTIME() = muestra la hora actual.

*/

SELECT nombre, fecha, CURDATE() AS Fecha_Actual FROM usuarios;

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'Diferencia de días'
FROM usuarios;

SELECT nombre, CURTIME() AS 'Hora Actual' FROM usuarios;

SELECT nombre, DAYNAME(fecha) FROM usuarios;

SELECT nombre, DAYOFWEEK(fecha) FROM usuarios;

SELECT nombre, DAYOFMONTH(fecha) FROM usuarios;

SELECT nombre, DAYOFYEAR(fecha) FROM usuarios;

SELECT MONTH(fecha) FROM usuarios;

SELECT YEAR(fecha) FROM usuarios;