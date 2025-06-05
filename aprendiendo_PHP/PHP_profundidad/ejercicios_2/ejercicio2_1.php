<?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
};
if (isset($_GET['numero']) && $_GET['numero'] == 1) {
    $_SESSION['contador']++;
}
if (isset($_GET['numero']) && $_GET['numero'] == 0) {
    $_SESSION['contador']--;
}
?>


<a href="ejercicio2_1.php?numero=1"> + </a>
<h1>
    El valor actual del contador es: <?= $_SESSION['contador'] ?>
</h1>
<a href="ejercicio2_1.php?numero=0"> - </a>