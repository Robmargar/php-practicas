/*
    CONSULTAS DE AGRUPAMIENTO

    SIRVE PARA AGRUPAR 

    SELECT  
*/

# Esto es una consulta normal donde me muestra todos los elementos de un campo.
SELECT titulo FROM entradas;

#Ahora haremos esa misma consulta pero con un agrupamiento usando GROUP BY haciendo esto nos da solo un elemento de cada categoria. 
SELECT titulo FROM entradas GROUP BY categoria_id;

#A la consulta anterior que ya esta agrupada ahora le pondremos la funcion para contar cuantos elementos tienen la misma categoria 
SELECT COUNT(titulo) FROM entradas GROUP BY categoria_id;

# Ya que tenemos el conteo de cuantos titulos tienen la misma categoria le daremos forma a nuestra consulta 
SELECT COUNT(titulo) AS 'Número de entradas iguales', categoria_id FROM entradas GROUP BY categoria_id;

