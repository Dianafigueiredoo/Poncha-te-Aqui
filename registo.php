<?php
include 'includes/db.php';

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $verifica = "SELECT id FROM utilizadores WHERE email = '$email'";
    $resultado = $conn->query($verifica);

    if ($resultado->num_rows>0){
        $erro = "Este email já está registado.";
    } else {
        $sql="INSERT INTO utilizadores (nome, email, password, pontos)
        VALUES ('$nome', '$email' , '$password', 0 )";

        if ($conn->query($sql)){
            $sucesso = "Conta criada com sucesso!";
        } else {
            $erro = 'Erro ao criar conta.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar | Poncha-te Aqui</title>

    <link rel="stylesheet" href="style.css?v=4"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logos.png">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <header class="registo-header">
        <h1>Crie a Sua Conta</h1>
        <p>Junte-se à comunidade Poncha-te Aqui para gerir as suas reservas.</p>
    </header>

    <div class="registo-form registo-simples">

        <?php if (!empty($erro)) { ?>
            <p style="color:red; text-align:center"><?php echo $erro; ?></p>
        <?php } ?>

        <?php if (!empty($sucesso)) { ?>
            <p style="color:green; text-align:center"><?php echo $sucesso; ?></p>
        <?php } ?>

        <form method="POST">
            <div class="form-group">
                <label for="cliente-nome">Nome Completo</label>
                <input type="text" name="nome" id="cliente-nome" required>
            </div>

            <div class="form-group">
                <label for="cliente-email">Email</label>
                <input type="email" name="email" id="cliente-email" required>
            </div>

            <div class="form-group">
                <label for="cliente-pass">Palavra-passe</label>
                <input type="password" name="password" id="cliente-pass" required>
            </div>

            <button type="submit" class="submit-btn">CRIAR CONTA</button>
        </form>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>