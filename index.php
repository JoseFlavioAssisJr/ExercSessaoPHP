<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício de sessão</title>
    </head>
    <body>
    <center><h1>Exercício de sessão</h1>
    <br>
    <?php
        if (isset($_REQUEST["erro"]))
             echo "O login está incorreto!";
    ?>
    
    
    <form action="processaLogin.php" method="post">
        Login:<input type="text" name="login" value="" /><br><br>
        Senha:<input type="password" name="senha" value="" />
        <br><br>
        <input type="submit" value="Entrar" /> <input type="reset" value="Cancelar" />
    </form>
    </center>
    </body>
</html>
