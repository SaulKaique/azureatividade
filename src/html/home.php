<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Bem-vindo à Página Inicial</h2>
        
        <?php
            session_start();
            if (isset($_SESSION["username"])) {
                echo "<p>Olá, " . $_SESSION["username"] . "!</p>";
                echo "<p>Esta é a sua página inicial.</p>";
                echo '<a href="logout.php">Sair</a>';
            } else {
                exit();
            }
        ?>
    </div>
</body>
</html>
