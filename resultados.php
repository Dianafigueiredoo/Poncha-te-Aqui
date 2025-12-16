<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Resultados | Poncha-te Aqui</title>
    <link rel="stylesheet" href="style.css?v=4">
    <link rel="shortcut icon" href="img/logos.png">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<?php
include 'includes/db.php';
include 'includes/header.php';
?>

<style>
/* ===== RESULTADOS ===== */
.resultados {
    padding: 60px 5%;
    background: #f5f7fb;
}

.resultados h1 {
    margin-bottom: 40px;
    color: #1e2a41;
}

/* CARD */
.card-alojamento {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-bottom: 40px;
}

/* TEXTO */
.card-alojamento .info {
    padding: 30px;
    flex: 1;
}

.card-alojamento h2 {
    margin-top: 0;
    color: #1e2a41;
}

.card-alojamento .local {
    font-weight: 600;
    color: #777;
    margin-bottom: 10px;
}

.card-alojamento .pontos {
    margin-top: 15px;
    font-weight: bold;
    color: #1e2a41;
}

/* IMAGEM */

.card-alojamento img {
    width: 340px;
    aspect-ratio: 4 / 3;   /* 🔑 isto resolve tudo */
    object-fit: cover;
    display: block;
}

/* RESPONSIVO */
@media (max-width: 900px) {
    .card-alojamento {
        flex-direction: column;
    }

    .card-alojamento img {
        width: 100%;
        height: 220px;
    }
}
</style>

<main class="resultados">
    <h1>Alojamentos disponíveis</h1>

    <?php
    $sql = "SELECT * FROM alojamentos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <a href="alojamento.php?id=<?php echo $row['id']; ?>" class="card-link">
            <div class="card-alojamento">

                <div class="info">
                    <h2><?php echo $row['nome']; ?></h2>
                    <p class="local"><?php echo $row['localizacao']; ?></p>
                    <p><?php echo $row['descricao']; ?></p>

                    <p><strong>Capacidade:</strong> <?php echo $row['capacidade']; ?> pessoas</p>
                    <p><strong>Preço/noite:</strong> €<?php echo number_format($row['preco_noite'], 2, ',', '.'); ?></p>

                    <p class="pontos">⭐ <?php echo $row['pontos_por_estadia']; ?> pontos por estadia</p>
                </div>

                <img src="img/<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome']; ?>">

            </div>
        </a>
            <?php
        }
    } else {
        echo "<p>Não existem alojamentos disponíveis.</p>";
    }
    ?>
</main>

<?php include 'includes/footer.php'; ?>