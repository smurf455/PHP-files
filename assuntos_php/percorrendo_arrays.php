<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Percorrendo arrays</title>
    </head>
    <body>
        <?php
            $registros = array(
                array('titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo noticia 1'),
                array('titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo noticia 2'),
                array('titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo noticia 3'),
            );

            $verificador = 0;
            //realiza a contagem de registros para que a inserção de novos item seja dinamica 
            while($verificador < count($registros)){
                echo '<h3>' . $registros[$verificador]['titulo'] . '</h3>'; 
                echo '<p>'. $registros[$verificador]['conteudo'] . '</p>'; 
                echo '</br>';

                $verificador++; 
            }

            /* utilizando o do while
                do {
                    echo '<h3>' . $registros[$verificador]['titulo'] . '</h3>'; 
                echo '<p>'. $registros[$verificador]['conteudo'] . '</p>'; 

                echo '</br>';

                $verificador++; 
                } while($verificador < count($registros))
            

            // utilizando o laço for
                for($verificador = 0; $verificador < count($registros); $verificador++){
                    echo '<h3>' . $registros[$verificador]['titulo'] . '</h3>'; 
                    echo '<p>'. $registros[$verificador]['conteudo'] . '</p>'; 

                echo '</br>';
                }
                */
            
        ?>
    </body>
</html>