<!DOCTYPE HTML>
<html>
    <head>
        <title>Química</title>
    </head>
    <body>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if(isset($_POST["q1"]) && isset($_POST["q2"]) && is_numeric($_POST["q2"])) {
                    
                    echo "<p>Questão <strong>1)</strong></p>";

                    switch($_POST["q1"]) {

                        case 3:
                            echo "<p>Sua resposta está <strong>CORRETA.</strong></p>";
                        break;

                        default:
                        echo "<p>Sua resposta está <strong>INCORRETA.</strong></p>";
                        break;

                    }

                    echo "<p>O hexano é a única espécie listada capaz de dissolver o naftaleno, pois, tal como ele, é uma substância bastante APOLAR.</p>";
                    echo "<p>As outras substâncias listadas (água, vinagre e acetona) são substâncias polares (devido à geometria e a grupos funcionais como carboxila e carbonila, respectivamente) e têm facilidade em dissolver outros compostos polares, mas não tanta em compostos completa ou predominantemente apolares.";
                    
                    echo "<p>Questão <strong>2)</strong></p>";

                    if($_POST["q2"] == 4) echo "<p>Sua resposta está <strong>CORRETA.</strong></p>";
                    else echo "<p>Sua resposta está <strong>INCORRETA.</strong></p>";

                    echo "<p>Sabendo-se que há uma concentração de 1g por 10mL na fração retirada, deduz-se que, na solução final, após esta ter sido adicionada, encontra-se 1g de sal dissolvido em 250mL. Proporcionalmente, deduz-se que esta solução possui concentração 4g/L.</p>";

                }

                else {
                    echo "<h2>Erro:</h2>";
                    echo "<p>Você não selecionou qualquer alternativa da primeira questão ou não digitou uma resposta válida na segunda.</p>";
                }

                echo "<p>(C)opyright 2020, Miguel Aguena (Miih737)<p>";

            }

        ?>

    </body>
</html>