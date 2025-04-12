<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = trim($_POST["titulo"]);
    $autor = trim($_POST["autor"]);
    $anio = trim($_POST["anio"]);

    if ($titulo && $autor && $anio) {
        $linea = "$titulo | $autor | $anio" . PHP_EOL;
        file_put_contents("libros.txt", $linea, FILE_APPEND | LOCK_EX);
        header("Location: index.html");
        exit();
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método no permitido.";
}
?>
