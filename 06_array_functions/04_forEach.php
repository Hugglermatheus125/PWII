<?php 

    $alunos = [
    [
        'nome' => 'Marquitos',
        'nota' => '7'
    ],
    [
        'nome' => 'LigerinhoViado',
        'nota' => '0'
    ]
];

    forEach ($alunos as $key => $estudante) {
        if ($estudante ['nota'] < 7)
            echo 'Aluno ' . $estudante['nome'] . ' está reprovado!';
        else
            echo 'Aluno ' . $estudante['nome'] . ' está aprovado!';

        echo '<br>';
    };
?>