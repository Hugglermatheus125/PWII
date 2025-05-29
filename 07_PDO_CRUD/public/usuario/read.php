<?php

    include '../../includes/header.php'; 

    include '../../includes/menu.php'; 
  
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();

    // echo "<pre>";
    // echo var_dump($usuarios);
?>

    <?php foreach ($usuarios as $indice => $user) { ?>
        <p>
            <strong>Nome da Heroina:</strong>
            <?php echo $user['username']; ?>
        <br>
            <a href="http://localhost/PWII/07_PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id']; ?>">Remover</a>
            <a href="http://localhost/PWII/07_PDO_CRUD/public/usuario/update.php?id=<?php echo $user['id']; ?>">Editar</a>
        </p>
        <hr>
<?php } ?>
    
<?php include '../../includes/footer.php'; ?>