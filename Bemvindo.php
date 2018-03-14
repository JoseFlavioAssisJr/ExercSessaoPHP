<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><center>
        <?php
        session_start();
        
        $login = $_SESSION['login'];
        $disciplina = $_SESSION["disciplina"];
        
        echo "<h1><b>Bem-vindo $login da disciplina $disciplina <br>"; 
        
        $timestamp = time();
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        $horas = date('H:i:s');
        echo strftime('Hoje são %d de %B de %Y<br>' ,  strftime($timestamp));
        echo strftime( 'Seu acesso no sistema foi feito às ');
        echo ($horas);
        
        ?>
    </center>
    </body>
</html>
