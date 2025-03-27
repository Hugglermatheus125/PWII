<?php

    $pessoas = [
    [
        'nome' => 'Ligerinho',
        'idade' => '18'

    ],

    [
        'nome' => 'Esnupi',
        'idade' => '12'

    ]
    ];

     verificarVotacao($pessoas);

     //=========================================================

     function verificarVotacao($pessoas){
        foreach ($pessoas as $key => $pessoas) {

            echo '<center>';
    
            if ($pessoas['idade'] < 16)
            echo '<h1>' . $pessoas['nome'] . ' não pode votar!' . '</h1>';
    
            elseif ($pessoas['idade'] >= 16 && $pessoas['idade'] <= 17)
            echo '<h1>' . $pessoas['nome'] . ' tem voto opcional!' . '</h1>';
    
            elseif ($pessoas['idade'] >= 18 && $pessoas['idade'] <= 70)
            echo '<h1>' . $pessoas['nome'] . ' tem voto obrigatório!' . '</h1>';
    
            else
            echo '<h1>' . $pessoas['nome'] . ' tem voto opcional!' . '</h1>';
    
            echo '<center>';

        };
     };

    

?>