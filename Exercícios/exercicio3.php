<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>

    <style>
        h1{
            color: purple;
        }
        h2{
            color: lightblue;
        }
    </style>
</head>
<body>
    <h2> Programadora: Sophia Ramalho Keller </h2>
    <!-- Tipos de Números -->
    <h1>Exercício 3 no PHP</h1>
    <br><hr>
    <h1>Números Inteiros</h1>
    <!-- Código PHP para números inteiros. -->
    <?php
        echo 2;
        echo "<br>";
        echo 4;
        echo "| Valores inteiros. <br>";
        echo 3 + 3;
        echo "| Soma de inteiros. <br>";
        echo -8;
        echo "| Números negativos. <br>";
        echo 5 - 15;
        echo "| Soma com negativo. <br>";

        $n = 12;
        echo $n;
        echo "| Alimentar variável e recuperar valor. <br>";
    ?>

    <!-- Verificação -->
    <h2>verificação</h2>

    <?php
        if(is_int(5)) { //true
            echo "É um inteiro <br>";
        }
        if(is_int("Não é um inteiro")) { //false
            echo "É um inteiro 2 <br>";
        }

        $n = 10;
        if(is_int($n)) { //true
            echo "É um inteiro 3 <br>";
        }
    ?>
    <hr><br>
    <h1>Números de ponto flutuante (float)</h1>

    <!-- Código PHP para números tipo float -->
    <?php
        // Realizar operações matemáticas
        echo 388888.5 * 2;
        echo "<br>";
    ?>
   
    <!-- Verificação -->
    <h2>verificação</h2>

    <!-- Código PHP para verificação de float -->
    <?php
        $a = 388888.5;
        $b = 2;

        if(is_float($a)) {
            echo "38888,5 É float 1! <br>";
        }

        if(is_float($b)) {
            echo "*2 É float 2! <br>";
        }
    ?>

    <br><hr>
    <h1>Tipos de dados texto (String)</h1>
    <ul>
        <li>aspas simples</li>
        <li>aspas duplas</li>
        <li>chamando variável</li>
    </ul>
    
    <!-- Código PHP para tipos de string -->
    <?php
        
        echo "'aspas simples' <br>";
        echo '"aspas duplas" <br>';
        echo "<br><p>Para exibir uma aspas, inicie a string .</p>";
        

        echo "<br<p>O valor é passdo para a variável e depois recuperado na string.</p>";
        $idade = 15;

        echo "Ele tem $idade anos <br>";
    ?>

    <!-- Verificação -->
    <h2>verificação</h2>

    <!-- Código PHP para verificar strings -->
    <?php
        $str = "EXERCICIO";
        $num = 03;
        

        if(is_string($str)) {
            echo "$str";
        }

        if(is_string($num)) {
            echo "$num é uma string 2<br>";
        }

        if(is_string("asd")) {
            echo " número $num";
        }
    ?>
    <br><hr>
    <h1>Tipos de dados booleano </h1>
    <ul>
        <li>Se o usuário for maior de idade (verdade) ... </li>
        <li>Enquanto for verdadeiro (poderá dirigir)... </li>
        <li>Até deixar de ser verdadeiro ... </li>
    </ul>

    <!-- Código PHP para booleanos -->
    <?php

        echo true;
        echo "<br>";
        echo false;
        
        if(18 > 17) { //true
            echo "É verdadeiro! <br>";
        }

        $pode_dirigir = true;

        if($pode_dirigir) {
            echo "O usuário pode Dirigir";
        }
        $pode_dirigir = false;

        if($pode_dirigir) {
            echo "O usuário não pode Dirigir";
        }
    ?>

    <h2>verificação</h2>

    <!-- Código PHP para verificar booleanos -->
    <?php
        $pode_dirigir = true;

        if(is_bool($pode_dirigir)) {
            echo "É autorizado a dirigir (verdadeiro)<br>";
        }

        if(is_bool(0)) {
            echo "É um booleano 2 <br>";
        }

        if(is_bool(false)) {
            echo "Não está autorizado a dirigir (falso)<br>";
        }

        if(0.0 == false) {
            echo "0 é considerado falso! <br>";
        }
    ?>
    <hr>
    <h1>Tipos de dados array (lista)</h1>
    
    <!-- Código PHP para arrays -->
    <?php
        echo "<p>Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses.</p>";
        $a = array (2, 4, 6, 8);

        //Mostrar no navegador o Arra inteiro
        print_r($a);
        echo "<br>";

        //Mostrar no navegador somente o valor da primeira posição na lista.
        echo "<p>O Primeiro valor da lista é: $a[0]</p>";

        echo "<br><p>Sintaxe CURTA: NÃO usa nome e põe os valorea entre colchetes.</p>";

        $arr = ["EXERCICIO", 3, "18/08/2023"];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[1]);
        echo "<p>O Segundo valor da lista é: $arr[1]</p>";

    ?>

</body>
</html>