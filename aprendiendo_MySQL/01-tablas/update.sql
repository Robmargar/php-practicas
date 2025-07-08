/* 
Para actualizar filas dentro de SQL lo que debemos hacer y utilizar eslo siguiente:

Modifiar /Actualizar información

UPDATE usuarios SET campo_a_actualizar='valor a asignar' WHERE valor_fila_a_actualizar=valor_del_campo

*/

UPDATE usuarios SET fecha = '2019-07-09', nombre = 'Rober' WHERE id = 1; 