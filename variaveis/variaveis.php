<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaração de Variáveis</title>
</head>
<body>
    <h1>Declaração de variáveis em PHP</h1>

    <h3>Variáveis do tipo inteiro</h3>
    <?php
        $idade = 25; echo "Idade: $idade<br>";
        $ano = 2020; echo "Ano: $ano<br>";
        $numero = -10; echo "Número: $numero<br>";
    ?>

    <p>
        As variáveis do tipo inteiro são utilizadas para armazenar números inteiros, ou seja, números sem casas decimais.
    </p>
    <p>
        Elas são utilizadas para armazenar números aos quais utilizamos no cotidiano, seja para contar algo, 
        para armazenar a idade de alguém, entre outras situações.
    </p>
    <p>
        Nesses exemplos de variáveis, é possível receber tanto números positivos como em idade(<?=$idade?>) e ano(<?=$ano?>), como também número negativos
        como em número(<?=$numero?>).
    </p>

    <hr>
    <h3>Variáveis do tipo ponto flutuante (double ou float)</h3>
    <?php
        $salario = 1500.05; echo "Salário: $salario<br>";
        $nota = 9.5; echo "Nota: $nota<br>";
        $saldo = -100.50; echo "Saldo: $saldo<br>";
    ?>
    <p>
        O ponto flutuante é um tipo de variável que pode ser representado por números decimais, ou seja, números com mais de uma casa após a vírgula.
    </p>
    <p>
        Nesse caso a pontuação utilizada é o ponto e não a vírgula como é utilizada por nós pessoas normalmente.
    </p>
    <p>
        Nesse exemplo de variável, é possível receber números tanto positivos como negativos como nos inteiros, porém agora com casas decimais, 
        como em salário(<?=$salario?>) que possui mais de uma casa e nota(<?=$nota?>) que possui apenas uma casa após o ponto, ambos positivos. 
        Já a variável saldo(<?=$saldo?>) é um número negativo com casas decimais.
    </p>

    <hr>
    <h3>Variáveis do tipo string</h3>
    <?php
        $nome = "João"; echo "Nome: $nome<br>";
        $cidade = 'São Paulo'; echo "Cidade: $cidade<br>";
        $texto = "Olá, mundo!"; echo "Texto: $texto<br>";
        $numero = "10"; echo "Número: $numero<br>";
    ?>

    <p>
        As variáveis do tipo string são utilizadas para armazenar textos, ou seja, palavras, frases, letras, números, entre outros.
    </p>
    <p>
        Elas são utilizadas para armazenar informações que não são numéricas, como por exemplo, nome, endereço, cidade, entre outros.
    </p>
    <p>
        Nesses exemplos de variáveis, é possível receber tanto palavras como em nome(<?=$nome?>) e cidade(<?=$cidade?>), 
        como também frases como em texto(<?=$texto?>) e números como em número(<?=$numero?>).
    </p>
    
    <hr>
    <h3>Variáveis do tipo booleano</h3>
    <?php
        $aprovado = true; echo "Aprovado: $aprovado<br>";
        $reprovado = false; echo "Reprovado: $reprovado<br>";
        $aceso = true; echo "Aceso: $aceso<br>";
    ?>

    <p>
        As variáveis do tipo booleano são utilizadas para armazenar valores lógicos, ou seja, verdadeiro ou falso(true ou false).
    </p>
    <p>
        Elas são utilizadas para armazenar informações que são binárias, ou seja, que possuem apenas dois valores possíveis, 
        seja para algo literalmente verdadeiro ou falso ou algo que remeta a lógica de sim ou não, 0 ou 1, entre outros.
    </p>
    <p>
        Nesses exemplos de variáveis, é possível receber tanto valores verdadeiros como em aprovado(<?=$aprovado?>) e aceso(<?=$aceso?>), 
        como também valores falsos como em reprovado(<?=$reprovado?>).
    </p>
    <p>
        No caso acima, a variável aceso é um exemplo de variável booleana que não está relacionada diretamente com aprovação ou reprovação, 
        mas sim com um estado de algo, como por exemplo, uma lâmpada acesa ou apagada. Já as variáveis aprovado e reprovado estão relacionadas com aprovação e reprovação.
    </p>
    <p>
        É importante ressaltar que o PHP é case-insensitive, ou seja, não diferencia letras maiúsculas de minúsculas, 
        então as palavras reservadas true e false podem ser escritas tanto em letras maiúsculas como em minúsculas.
    </p>

    <hr>
    <h3>Variáveis do tipo array</h3>
    <?php
        $frutas = array("Maçã", "Banana", "Laranja", "Uva");
        $numeros = array(10, 20, 30, 40, 50);
        $pessoas = array("João", "Maria", "José", "Ana");
        $variedades = array("Maçã", 10, true, 9.5);
    ?>
    <p>
        As variáveis do tipo array são utilizadas para armazenar uma coleção de valores, ou seja, uma lista de valores.
    </p>
    <p>
        Elas são utilizadas para armazenar informações que possuem mais de um valor, como por exemplo, 
        uma lista de frutas, uma lista de números, uma lista de pessoas, até coisas mais complexas e combinadas.
    </p>
    <p>
        Nesses exemplos de variáveis, é possível receber tanto uma lista de frutas 
        como em frutas(<?=$frutas[0]?>, <?=$frutas[1]?>, <?=$frutas[2]?>, <?=$frutas[3]?>), 
        como uma lista de números como em números(<?=$numeros[0]?>, <?=$numeros[1]?>, <?=$numeros[2]?>, <?=$numeros[3]?>, <?=$numeros[4]?>), 
        uma lista de pessoas como em pessoas(<?=$pessoas[0]?>, <?=$pessoas[1]?>, <?=$pessoas[2]?>, <?=$pessoas[3]?>) 
        e até uma lista de coisas com valores diferentes 
        como em variedades(<?=$variedades[0]?>, <?=$variedades[1]?>, <?=$variedades[2]?>, <?=$variedades[3]?>).
    </p>
    <p>
        É importante ressaltar que os arrays são indexados, ou seja, cada valor possui uma posição, 
        sendo que a primeira posição é a posição 0, a segunda posição é a posição 1, e assim por diante.
    </p>

    <hr>
    <h3>Variáveis do tipo objeto</h3>
    <?php
        class Pessoa {
            public $nome;
            public $idade;
            public $cidade;
        }

        $pessoa1 = new Pessoa();
        $pessoa1->nome = "João";
        $pessoa1->idade = 25;
        $pessoa1->cidade = "São Paulo";

        $pessoa2 = new Pessoa();
        $pessoa2->nome = "Maria";
        $pessoa2->idade = 30;
        $pessoa2->cidade = "Rio de Janeiro";
    ?>
    <p>
        As variáveis do tipo objeto são utilizadas para armazenar informações mais complexas, ou seja, 
        informações que possuem mais de um valor e que estão relacionadas entre si.
    </p>
    <p>
        Elas são utilizadas para armazenar informações que possuem mais de um valor e que estão relacionadas entre si, como por exemplo, 
        informações de uma pessoa, informações de um carro, informações de um produto, entre outros.
    </p>
    <p>
        Nesses exemplos de variáveis, é possível receber informações de uma pessoa 
        como em pessoa1(<?=$pessoa1->nome?>, <?=$pessoa1->idade?>, <?=$pessoa1->cidade?>) 
        e pessoa2(<?=$pessoa2->nome?>, <?=$pessoa2->idade?>, <?=$pessoa2->cidade?>).
    </p>
</body>
</html>