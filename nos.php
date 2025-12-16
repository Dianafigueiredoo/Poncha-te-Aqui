<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Poncha-te Aqui</title>
    <link rel="stylesheet" href="style.css?v=4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logos.png">
  
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <div class="container">
        
        <div class="main-content-layout">
            
            <div class="text-column">
                <header class="about-header">
                    <h1>Sobre nós</h1>
                    <h2>A sua porta de entrada para a Madeira autêntica</h2>
                </header>

                <p>Bem-vindo(a) ao seu guia de eleição para descobrir a magia da Ilha da Madeira através dos olhos de quem a ama. Somos uma equipa apaixonada e dedicada, nascida da vontade de partilhar o melhor que a Madeira tem para oferecer: não apenas paisagens de cortar a respiração, mas também a verdadeira experiência de viver como um local.</p>

                <h3 class="section-title">A nossa missão</h3>
                <p>Acreditamos que a melhor forma de conhecer a ilha é ficar num Alojamento Local que se sinta verdadeiramente como uma segunda casa. O nosso objetivo é simples: ligar viajantes como você a propriedades únicas e cuidadosamente selecionadas em toda a ilha. Garantimos que cada estadia lhe proporcionará conforto, autenticidade e memórias inesquecíveis.</p>

                <h3 class="section-title">Porquê escolher-nos?</h3>
                
                <div class="bullet-point">
                    <strong>> Conhecimento Local e Qualidade:</strong>
                    <p>Oferecemos alojamentos escolhidos a dedo por quem vive e respira a Madeira, garantindo-lhe a melhor qualidade e dicas locais autênticas.</p>
                </div>
                
                <div class="bullet-point">
                    <strong>> Recompensamos a sua Fidelidade:</strong>
                    <p>O nosso programa exclusivo dá-lhe pontos de desconto por cada noite reservada. Troque-os por descontos em futuras estadias ou experiências na ilha (passeios de barco, restaurantes, etc.).</p>
                </div>

                <p style="font-weight: bold; margin-top: 30px;">Venha sentir a Madeira connosco!</p>
                <div class="sub-image-row">
                    <img src="img/casa.jpg" alt="Detalhe Alojamento" class="img-small-double">
                    <img src="img/miradouro.jpg" alt="Miradouro" class="img-small-double">
                </div>
                <div class="sub-image-row segunda-linha-imgs"> 
                    <img src="img/jantar.jpg" alt="Jantar" class="img-small-double">
                    <img src="img/paisagem.jpg" alt="paisagem" class="img-small-double">
                </div>
                
            
            </div>

            <div class="visual-contact-column">
                
                <div class="image-grid">
                    <img class="img-passeio" src="img/passeio.jpg" alt="Passeio">
                    
                    <img class="img-brinde" src="img/poncha.jpeg" alt="Poncha">
                    
                    <img class="img-vista-mar" src="img/imagem7.jpg" alt="Vista">

                    <img class="img-jardim" src="img/jardim.jpg" alt="Jardim">
                </div>

                <div class="contact-form-container">
                    <h3>Fala connosco!</h3>
                    
                    <form>
                        <div class="form-group">
                            <label for="first-name">Primeiro nome</label>
                            <input type="text" id="first-name" placeholder="Ricardo">
                        </div>
                        
                        <div class="form-group">
                            <label for="last-name">Ultimo nome</label>
                            <input type="text" id="last-name" placeholder="Patacho">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="ricardop@fakedomain.net">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">A tua mensagem</label>
                            <input type="text" id="message" placeholder="Escreve a tua mensagem">
                        </div>
                        
                        <button class="submit-button" type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>