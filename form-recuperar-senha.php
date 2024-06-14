<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuário de recuperação de senha</title>
</head>
<body>
    Digite o seu email para você criar uma nova senha.<br>
    Será enviado um email com o link de recuperação que você usará para criar uma nova senha.
    <form action="recuperar.php" method="post">
        <label>Email: <input type = "email" name = "email"></label><br>
        <input type="submit" value= "Enviar email de recuperação">
    </form>
    
</body>
</html>