<?php

    $alunos = [
        'Seleide da Silva',
        'Pombinha Branca',
        'Jacarildo Silveiro'
    ];

    dizerOla($alunos);

    function dizerOla($estudantes) {
        foreach ($estudantes as $index => $estudante) {
            echo "<h1>$estudante</h1>";
            # code...
        }
    };

?>