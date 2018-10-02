<!DOCTYPE html>
<html>
    <body>
        <h1>Mi excusa de página PHP</h1>

        <?php
            $txt = "Tremendo hola mundo capo </br>";
            $colors = array("rojo" => "red", "verde" => "green", "azul" => "blue", "amarillo" => "yellow");

            function myTest(){
                static $x =0;
                echo $x."</br>";
                $x++;
                    var_dump($x);
            }

            function echoTest($text) {
                echo "$text aaaaaaaaaaaaaaa";
            }

            echoTest($txt);

            echo($txt);
            myTest();
            myTest();
            myTest();
        ?>
    </body>
</html>