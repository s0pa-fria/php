<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto (string) no PHP</title>
</head>
<body>
    <h1>Tipos de dados texto no PHP</h1>
    <p>Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte.</p>
    <ul>
        <li>aspas simples</li>
        <li>aspas duplas</li>
    </ul>
    
    <!-- Código PHP para tipos de string -->
    <?php
        echo "Testando texto aspas duplas <br>";
        echo 'Testando texto aspas simples <br>';
        echo "<br><p>Para exibir uma aspas, inicie a string com a outra.</p>";
        echo "Ele disse: 'Olá!' <br>";
        echo 'Ele disse: "Olá!" <br>';

        echo "<br<p>O valor é passdo para a variável e depois recuperado na string.</p>";
        $idade = 15;

        echo "Ele tem $idade anos <br>";
        echo 'Ele tem $idade anos';

    ?>
    
    <br><hr>
    <h2>Função de verificação</h2>
    <p>Para saber se uma variável é string usamos a função is_string()</p>

    <!-- Código PHP para verificar strings -->
    <?php
        $str = "SENAI";
        $num = 118;

        if(is_string($str)) {
            echo "$str é uma string 1<br>";
        }

        if(is_string($num)) {
            echo "$num é uma string 2<br>";
        }

        if(is_string("asd")) {
            echo "É uma string 3<br>";
        }
    ?>
   
</body>
</html>