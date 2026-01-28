<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'includes/db.php';

/* 🔒 validar ID */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Alojamento inválido");
}

$id = (int) $_GET['id'];

/* buscar alojamento */
$sql = "SELECT * FROM alojamentos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Alojamento não encontrado");
}

$alojamento = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($alojamento['nome']); ?> | Poncha-te Aqui</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Teu CSS -->
    <link rel="stylesheet" href="style.css?v=4">
    <link rel="shortcut icon" href="img/logos.png">
</head>

<body>

<?php include 'includes/header.php'; ?>

<main class="container my-5">

    <!-- CARD PRINCIPAL -->
    <div class="card shadow-sm mx-auto" style="max-width: 900px;">
        <div class="row g-0">

            <!-- IMAGEM -->
            <div class="col-md-6">
                <img
                    src="img/<?= htmlspecialchars($alojamento['imagem']); ?>"
                    alt="<?= htmlspecialchars($alojamento['nome']); ?>"
                    class="img-fluid h-100 w-100"
                    style="object-fit: cover;"
                >
            </div>

            <!-- INFO -->
            <div class="col-md-6">
                <div class="card-body p-4">

                    <h2 class="card-title mb-2">
                        <?= htmlspecialchars($alojamento['nome']); ?>
                    </h2>

                    <p class="text-muted mb-3">
                        <?= htmlspecialchars($alojamento['localizacao']); ?>
                    </p>

                    <p>
                        <?= nl2br(htmlspecialchars($alojamento['descricao'])); ?>
                    </p>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item px-0">
                            <strong>Capacidade:</strong>
                            <?= $alojamento['capacidade']; ?> pessoas
                        </li>
                        <li class="list-group-item px-0">
                            <strong>Preço por noite:</strong>
                            €<?= number_format($alojamento['preco_noite'], 2, ',', '.'); ?>
                        </li>
                        <li class="list-group-item px-0">
                            ⭐ <?= $alojamento['pontos_por_estadia']; ?> pontos por estadia
                        </li>
                    </ul>

                    <!-- 🔐 LOGIN / RESERVA -->
                    <?php if (!isset($_SESSION['user_id'])): ?>

                        <div class="alert alert-secondary text-center mb-0">
                            Para reservar este alojamento é necessário
                            <a href="login.php?redirect=alojamentos.php?id=<?= $alojamento['id']; ?>" class="fw-bold">
                                entrar ou registar-se
                            </a>.
                        </div>

                    <?php else: ?>

                        <form method="post" action="reservas.php" class="row g-3">

                            <input type="hidden" name="alojamento_id"
                                   value="<?= $alojamento['id']; ?>">

                            <div class="col-6">
                                <label class="form-label">Adultos</label>
                                <input type="number" name="adultos" class="form-control" min="1" value="1" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Crianças</label>
                                <input type="number" name="criancas" class="form-control" min="0" value="0">
                            </div>

                            <div class="col-6">
                                <label class="form-label">Check-in</label>
                                <input type="date" name="data_inicio" class="form-control" required>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Check-out</label>
                                <input type="date" name="data_fim" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100">
                                    Reservar 🏠
                                </button>
                            </div>

                        </form>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>