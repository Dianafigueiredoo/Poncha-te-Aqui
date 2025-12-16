<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="topo">
    <div class="logo-area">
        <a href="index.php">
            <img src="img/logo_todo.png" width="350" alt="Logo">
        </a>
    </div>

    <nav class="menu">

        <a href="sugestoes.php">As nossas sugestões</a>
        <a href="nos.php">Sobre nós</a>

        <?php if (isset($_SESSION['user_id'])): ?>

            <span class="user-info">
                Olá, <?php echo htmlspecialchars($_SESSION['user_nome']); ?>
                ⭐ <?php echo (int) $_SESSION['user_pontos']; ?> pontos
            </span>

            <a href="logout.php" class="registar-btn">Sair</a>

        <?php else: ?>

            <a href="login.php">Login</a>
            <a href="registo.php" class="registar-btn">Registar</a>

        <?php endif; ?>

    </nav>
</header>