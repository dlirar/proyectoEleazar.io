<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
            Envío de archivos
        </title>
    </head>

    <body>
        
        <form action="guardarIniciativa.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" value="iniciativa" accept=".doc,.docx">
            <input type="submit" name="enviarIniciativa" value="Enviar iniciativa">
        </form>
    </body>
</html>