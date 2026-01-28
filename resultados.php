<?php 
include 'includes/db.php';

$sql = "SELECT * FROM alojamentos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Resultados | Poncha-te Aqui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

<main class="resultados py-5" style="margin-top: 100px;">
    <h1 class = "mb-4">Alojamentos disponíveis</h1>

    <?php 
    if ($result->num_rows>0) { while ($row = $result->fetch_assoc()) {?>

    <a href="alojamentos.php?id=<?php echo $row['id']; ?>"
        class="text-decoration-none text-dark card-link">

        <div class="card mb-3 shadow-sm ">
            <div class="row g-0 align-items-center">
                
                <div class="col-md-8">
                    <div class="card-body py-3">

                        <h5 class="card-title mb-1 text-dark"><?php echo $row['nome']; ?>
                        </h5>
                    
                        <p class="text-muted mb-1"><?php echo $row['localizacao']; ?>
                        </p>
                    
                        <p class="mb-2 small">
                            <?php echo $row['descricao']; ?>
                        </p>
                    
                        <p class="mb-1 small">
                            <strong>Capacidade:</strong>
                            <?php echo $row['capacidade']; ?> pessoas
                        </p>

                        <p class="fw-bold mb-1">
                            €<?php echo number_format($row['preco_noite'], 2, ',', '.'); ?> / noite
                        </p>
                    
                        <p class="text-warning fw-bold mb-0 small">
                            ⭐ <?php echo $row['pontos_por_estadia']; ?> pontos
                        </p>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <img src="img/<?php echo $row['imagem']; ?>"
                    alt="<?php echo $row['nome']; ?>"
                    class="img-fluid rounded-end"
                    style="height: 160px; width: 100%; object-fit: cover;">
                </div>
            </div>    
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
</body>
</html>
