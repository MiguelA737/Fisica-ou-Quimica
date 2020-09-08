<!DOCTYPE HTML>
<html>
    <head>
        <title>Física</title>
    </head>
    <body>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                
                if(isset($_GET["q1"]) && isset($_GET["q2"]) && is_numeric($_GET["q2"])) {
                    
                    echo "<p>Questão <strong>1)</strong></p>";

                    switch($_GET["q1"]) {

                        case 2:
                            echo "<p>Sua resposta está <strong>CORRETA.</strong></p>";
                        break;

                        default:
                        echo "<p>Sua resposta está <strong>INCORRETA.</strong></p>";
                        break;

                    }

                    echo "<p>A velocidade angular pode ser a mesma, mas a velocidade escalar em cada caso é diferente.</p>";
                    echo "<p>Como o veículo de A. percorreu uma circunferência de raio <em>r</em>, enquanto que o de B. uma de raio duas vezes maior, o combustível de B. foi consumido duas vezes mais rápido.</p>";
                    
                    echo "<p>Questão <strong>2)</strong></p>";

                    if($_GET["q2"] == 40000) echo "<p>Sua resposta está <strong>CORRETA.</strong></p>";
                    else echo "<p>Sua resposta está <strong>INCORRETA.</strong></p>";

                    echo "<p>O módulo da diferença entre as variações de energia das duas situações pode ser obtido ao se calculá-las a partir da equação fundamental da calorimetria.</p>";
                    echo "<p>Na primeira situação, calcula-se uma variação de 50000 cal. Na segunda, uma de 90000 cal. O módulo dessa diferença é de 40000 cal.</p>";

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