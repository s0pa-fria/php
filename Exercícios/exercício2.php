<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: purple}
    </style>
</head>
    <body>
        <h1 class="destaque">Trabalhando com PHP pt.2</h1>
        <p class="destaque">Programadora: Sophia Ramalho Keller</p>
        <hr>


        <?php
            // Geração de texto (string) 
            echo "Chama Sesi-Senai !";

            /* Geração de texto estrutural (com tags, atributos) */
            echo "<h2>Gerado <span class='destaque'>HTML</span> através do PHP.</h2>";
            echo "<h2>Gerado <span class=\"destaque\">HTML</span> através do PHP.</h2>";
        ?>

        <h1>HTML e PHP mesclados</h1>
        <p>Parágrafo HTML</p>

        <?php
            $linguagem = "Linguagem PHP.";
        ?>
        <p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
        <hr>


        <?php
            echo "&#160;  &#160;   Exercício2, soltando a criatividade<br>";
        ?>
        
        <p class="destaque">When I Was Your Man - Bruno Mars</p>
        <p> I hope he buys you flowers <br>
            I hope he holds your hand <br>
            Give you all his hours <br>
            When he has the chance <br>
            Take you to every party <br>
            'Cause I remember how much you loved to dance <br>
            Do all the things I should have done <br>
            When I was your man <br>
            Do all the things I should have done <br>
            When I was your man</p>
        
    </body>
</html>