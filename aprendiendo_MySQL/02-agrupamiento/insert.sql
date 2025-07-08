 # Iniciamos insertando valores para la tabla de CATEGORIAS #
    INSERT INTO categorias VALUES(null, 'Acción');
    INSERT INTO categorias VALUES(null, 'Rol');
    INSERT INTO categorias VALUES(null, 'Deportes');

    SELECT * FROM entradas;

 # Después insertando valores para la tabla de ENTRADAS #

    INSERT INTO entradas VALUES(null, 2, 1, 'Novedades del GTA 5', 'Review del GTA 5 ', CURDATE());
    INSERT INTO entradas VALUES(null, 1, 1, 'Novedades del GTA 4', 'Review del GTA 4 ', CURDATE());
    INSERT INTO entradas VALUES(null, 3, 1, 'Novedades del GTA 3', 'Review del GTA 3 ', CURDATE());


    INSERT INTO entradas VALUES(null, 1, 2, 'Novedades de LOL 3', 'Jugadores LOL 3', CURDATE());
    INSERT INTO entradas VALUES(null, 2, 2, 'Novedades de LOL 2', 'Todo sobre LOL 2', CURDATE());
    INSERT INTO entradas VALUES(null, 3, 2, 'Novedades de LOL ', 'Todo LOL ', CURDATE());


    INSERT INTO entradas VALUES(null, 1, 3, 'Jugadores del Fifa 2025', 'Analizando a jugadores 2025 ', CURDATE());
    INSERT INTO entradas VALUES(null, 2, 3, 'Jugadores del Fifa 2024', 'Analizando a jugadores 2024', CURDATE());
    INSERT INTO entradas VALUES(null, 3, 3, 'Jugadores del Fifa 2023', 'Analizando a jugadores 2023', CURDATE());