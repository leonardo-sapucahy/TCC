<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Melanina Hair</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style-home.css">
</head>

<body>--
    <!--menu dropdown-->
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Melanina Hair</a></li>
            <li><a href="/blog/agenda-1.php">Agendamentos</a></li>
            <li><a href="/blog/produtos-1.php">Produtos</a></li>
            <li><a href="/blog/financas-1.php">Finanças</a></li>
            <li><a href="/blog/contatos-1.php">Contatos</a></li>
            <li><a href="/blog/index.php">Admin</a>
                <ul>
                    <li><a href="/blog/admin/agenda/index.php">Agendamentos</a></li>
                    <li><a href="/blog/admin/produtos/index.php">Produtos</a></li>
                    <li><a href="/blog/admin/financas/index.php">Finanças</a></li>
                    <li><a href="/blog/admin/contatos/index.php">Contatos</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <img id="banner" src="salaobeleza.jpg">	

    <footer>
        <p class="copyright">&copy; Melanina Hair - 2022</p>
    </footer>
    
</body>

</html>