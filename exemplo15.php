<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "Variáveis de variáveis no PHP. <br><br>";

            $sMateria = "Geografia";
            echo $sMateria."<br>";

            $$sMateria = "Política";
            echo $sMateria."<br>";
            echo $$sMateria."<br>";
            echo $Geografia."<br>";
;        ?>
        </div>
    </body>
</html>