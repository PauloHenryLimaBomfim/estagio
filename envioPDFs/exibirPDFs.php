<?php
    require("conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estiloPDF.css">
        <title>Exibir PDFs</title>
    </head>
    <body>
        <section>
            <?php
                mostrarTodos($mysqli);
            ?>
            <a href="pdfs.php">Clique aqui para voltar</a>
        </section>
    </body>
</html>