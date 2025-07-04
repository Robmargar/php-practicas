/*
Para seleccionar 1os datos de una tabla utilizamos el Select

# Para mostrar todos los campos se utiliza el " * "
SELECT * FROM tabla_con_datos

*/

SELECT nombre, apellidos, email FROM usuarios;

SELECT id, email FROM usuarios;

#SE PUEDEN REALIZAR OPERACIONES ARTIMETICAS Y COLOCARLAS EN UNA COLUMNA NUEVA Y A ESA COLUMNA ASIGNARLE UN NOMBRE
SELECT id, email, (7 + 7) AS 'SUMA' FROM usuarios;


#PARA ORDENAR EN BASE A ALGUN CRITERIO CON "ORDER BY" Y QUE SE MUESTREN ASCENDENTE O DECENDENTE 
SELECT id, email, (7 + 7) AS 'SUMA' FROM usuarios ORDER BY email;

#EJEMPLO DE COMO SERÍA PARA ORDENAR ASC O DESC
SELECT id, email, (7 + 7) AS 'SUMA' FROM usuarios ORDER BY email (ASC / DESC);