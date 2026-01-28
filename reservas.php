

<?php
session_start();
include 'includes/db.php';

/* 🔐 Proteção */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

/* 📥 Dados vindos do formulário */
$alojamento_id = (int) $_POST['alojamento_id'];
$adultos  = (int) $_POST['adultos'];
$criancas = (int) $_POST['criancas'];
$data_inicio = $_POST['data_inicio'];
$data_fim    = $_POST['data_fim'];

/* 🏠 Buscar alojamento */
$sql = "SELECT * FROM alojamentos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $alojamento_id);
$stmt->execute();
$alojamento = $stmt->get_result()->fetch_assoc();

/* 💰 Cálculo do preço */
$preco_noite = $alojamento['preco_noite'];
$data_inicio = $_POST['data_inicio'];
$data_fim    = $_POST['data_fim'];

$inicio = new DateTime($data_inicio);
$fim    = new DateTime($data_fim);

$noites = $inicio->diff($fim)->days;

if ($noites < 1) {
    $noites = 1;
}

$preco_total = $noites * $preco_noite;

$pontos = $alojamento['pontos_por_estadia'];
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Confirmar Reserva | Poncha-te Aqui</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=4">
</head>

<body>

<?php include 'includes/header.php'; ?>

<main class="container my-5 py-5">
    <div class="row jusify-content-center g-4"></div>

    <h1 class="mb-4 text-center">Confirmar Reserva</h1>

    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-body">

            <p><strong>Utilizador:</strong> <?= $_SESSION['user_nome']; ?></p>

            <hr>

            <h5><?= $alojamento['nome']; ?></h5>
            <p class="text-muted"><?= $alojamento['localizacao']; ?></p>

            <p>
                <strong>Datas:</strong><br>
                Check-in: <?= $data_inicio; ?><br>
                Check-out: <?= $data_fim; ?>
            </p>

            <p>
                <strong>Adultos:</strong> <?= $adultos; ?><br>
                <strong>Crianças:</strong> <?= $criancas; ?>
            </p>

            <hr>

            <p>
                <strong>Preço por noite:</strong>
                €<?= number_format($preco_noite, 2, ',', '.'); ?>
            </p>

            <h4 class="text-success">
                Total: €<?= number_format($preco_total, 2, ',', '.'); ?>
            </h4>

            <form method="post" action="reservas.php" class="mt-4">

                <!-- reenviar dados -->
                <input type="hidden" name="alojamento_id" value="<?= $alojamento_id; ?>">
                <input type="hidden" name="adultos" value="<?= $adultos; ?>">
                <input type="hidden" name="criancas" value="<?= $criancas; ?>">
                <input type="hidden" name="data_inicio" value="<?= $data_inicio; ?>">
                <input type="hidden" name="data_fim" value="<?= $data_fim; ?>">
                <input type="hidden" name="preco_total" value="<?= $preco_total; ?>">
                <input type="hidden" name="pontos" value="<?= $pontos; ?>">

                <div class="mt-4 text-center">
                    <p class="mb-1"><strong>Pontos ganhos nesta reserva</strong></p>
                    <p class="fs-4 fw-bold text-success">
                        ⭐ <?= $pontos; ?> pontos
                    </p>
                </div>
                

                <button class="btn btn-primary w-100">
                    Confirmar Reserva ✅
                </button>
            </form>

        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>