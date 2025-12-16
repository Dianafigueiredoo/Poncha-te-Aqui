<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poncha-te aqui</title>
    <link rel="shortcut icon" href="img/logos.png">
    <link rel="stylesheet" href="style.css?v=4">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Descubra alojamentos locais na Ilha da Madeira</h1>
    
            <div class="search-box">
                <div class ="field full">
                    <span class ="label"> Localização: </span>
                    <span class="value"> Madeira, Portugal</span>
                </div>
            <div class="field">
                <span class ="label"> Check-in </span>
                <input type="date">
            </div>
            <div class ="field">
                <span class="label"> Check-out</span>
                <input type="date">
            </div>
            <div class="field">
                <span class="label">Adultos</span>
                <input type="number" min="1" value="1">
            </div>
        
            <div class="field">
                <span class="label">Crianças</span>
                <input type="number" min="0" value="0">
            </div>
        
            <a href="resultados.php" class="btn btn-search">PESQUISAR</a>
        </div>
    </section>
            <section class="beneficios">
            
                <div class="item-beneficio">
                    <div class="cabecalho-icon">
                        <img src="img/icone1.png" alt="Ícone Avaliações" class="icon">
                        <h3>Leia Avaliações Autênticas</h3>
                    </div>
                    <p>Encontre alojamentos que vai adorar com base nas excelentes experiências de outros viajantes que exploraram a Floresta Laurissilva e os jardins únicos.</p>
                </div>
        
                <div class="item-beneficio">
                    <div class="cabecalho-icon">
                        <img src="img/icone2.png" alt="Ícone Experiências" class="icon">
                        <h3>Escolha as experiências que mais lhe interessam</h3>
                    </div>
            
                    <p>Tours de observação de cetáceos, mergulho, ou aventura nas Piscinas Naturais: descubra dezenas de atividades à medida da sua paixão pelo mar.</p>
                </div>
        
                <div class="item-beneficio">
                    <div class="cabecalho-icon">
                        <img src="img/icone3.png" alt="Ícone Flexibilidade" class="icon">
                        <h3>Mantenha a Flexibilidade</h3>
                    </div>
                    <p>Casas com políticas de cancelamento flexíveis para poder adiar a subida aos Picos ou mudar os planos de Levadas.</p>
                </div>
        
            </section>
        </section>
    
        <section class="testemunhos">
            <h2>O que os nossos hóspedes dizem.</h2>
        
            <div class="cards-container">
                
                <div class="card-testemunho">
                    <p class="quote">"Nunca pensei que um alojamento local pudesse ser tão acolhedor e ter este nível de detalhe. A vista para o Pico Ruivo era de tirar o fôlego. Sentimo-nos em casa, mas com o conforto de um hotel."</p>
                    
                    <div class="cliente-info">
                        <img src="img/cliente1.jpg" alt="Foto de Vitória V." class="foto-cliente">
                        <div class="detalhes-cliente">
                            <div class="nome-cliente">Vitória V.</div>
                            <div class="titulo-cliente">Hóspede em 2024</div>
                        </div>
                    </div>
                </div>
        
                <div class="card-testemunho">
                    <p class="quote">"O processo de reserva foi incrivelmente fácil, e as fotos no site eram 100% autênticas. A casa era exatamente o que procurávamos. Recomendo a 'Poncha-te Aqui' a todos os meus amigos!"</p>
                    
                    <div class="cliente-info">
                        <img src="img/cliente2.jpg" alt="Foto de Ana Cristina F." class="foto-cliente">
                        <div class="detalhes-cliente">
                            <div class="nome-cliente">Ana Cristina F.</div>
                            <div class="titulo-cliente">Hóspede de longa data</div>
                        </div>
                    </div>
                </div>
        
            </div>
        </section>
    
        <section class="cta-proprietarios">
            <h2>JUNTE-SE À NOSSA COMUNIDADE DE ANFITRIÕES</h2>
            <p class="cta-descricao">Partilhe a magia da Madeira. Receba mais reservas e junte-se à nossa equipa de apoio local.</p>
        
            <form class="form-cta">
                <div class="cta-linha">
                    <input type="text" placeholder="Nome" class="input-cta metade">
                    <input type="tel" placeholder="Telefone" class="input-cta metade">
                </div>
        
                <div class="cta-linha">
                    <input type="email" placeholder="Email" class="input-cta total">
                </div>
        
                <button class="btn-cta">QUERO PARTILHAR O MEU ALOJAMENTO!</button>
            </form>
        </section>
        <?php include 'includes/footer.php'; ?>
</body>
</html>



    