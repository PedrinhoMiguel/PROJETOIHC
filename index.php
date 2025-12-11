<?php
// Dados simulados do brechó
$categorias = [
    "plus_size" => [
        "nome" => "Plus Size",
        "quantidade" => 45,
        "destaque" => true
    ],
    "feminino" => [
        "nome" => "Feminino",
        "quantidade" => 89,
        "destaque" => false
    ],
    "masculino" => [
        "nome" => "Masculino",
        "quantidade" => 67,
        "destaque" => false
    ],
    "infantil" => [
        "nome" => "Infantil",
        "quantidade" => 34,
        "destaque" => false
    ],
    "acessorios" => [
        "nome" => "Acessórios",
        "quantidade" => 23,
        "destaque" => false
    ]
];

$produtos_destaque = [
    [
        "nome" => "Vestido Floral Plus Size",
        "preco_original" => 129.90,
        "preco_promocional" => 79.90,
        "categoria" => "plus_size",
        "imagem" => "https://images.unsplash.com/photo-1595777457583-95e059d581b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80",
        "destaque" => true
    ],
    [
        "nome" => "Blazer Elegante Tam. G",
        "preco_original" => 89.90,
        "preco_promocional" => 59.90,
        "categoria" => "plus_size",
        "imagem" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80",
        "destaque" => true
    ],
    [
        "nome" => "Calça Jeans Wide Leg",
        "preco_original" => 99.90,
        "preco_promocional" => 69.90,
        "categoria" => "plus_size",
        "imagem" => "https://images.unsplash.com/photo-1541099649105-f69ad21f3246?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80",
        "destaque" => true
    ],
    [
        "nome" => "Blusa Masculina Casual",
        "preco_original" => 49.90,
        "preco_promocional" => 39.90,
        "categoria" => "masculino",
        "imagem" => "https://images.unsplash.com/photo-1520975916090-3105956dac38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80",
        "destaque" => true
    ]
];

$novidades = [
    [
        "nome" => "Conjunto Verão Plus Size",
        "preco" => 119.90,
        "categoria" => "plus_size",
        "imagem" => "https://images.unsplash.com/photo-1485231183945-fffde7cb39ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
    ],
    [
        "nome" => "Bolsa de Couro Legítimo",
        "preco" => 89.90,
        "categoria" => "acessorios",
        "imagem" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoStyle Brechó - Moda Sustentável & Plus Size</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <i class="fas fa-leaf"></i>
                    <span>EcoStyle Brechó</span>
                </div>
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Buscar produtos...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="user-actions">
                        <button class="icon-btn">
                            <i class="fas fa-heart"></i>
                            <span class="badge">3</span>
                        </button>
                        <a href="compras.php" class="icon-btn">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="badge">2</span>
                        </a>
                        <button class="icon-btn">
                            <i class="fas fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="#" class="nav-link active">Início</a></li>
                    <li><a href="#" class="nav-link">Plus Size</a></li>
                    <li><a href="#" class="nav-link">Feminino</a></li>
                    <li><a href="#" class="nav-link">Masculino</a></li>
                    <li><a href="#" class="nav-link">Infantil</a></li>
                    <li><a href="#" class="nav-link">Acessórios</a></li>
                    <li><a href="#" class="nav-link">Promoções</a></li>
                    <li><a href="#" class="nav-link">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-content">
                <h1>Moda Sustentável <span class="highlight">Para Todos os Corpos</span></h1>
                <p>Descubra peças únicas com até 70% de economia. Seção Plus Size com variedade e estilo!</p>
                <div class="hero-buttons">
                    <button class="btn btn-primary">
                        <i class="fas fa-star"></i>
                        Ver Plus Size
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-bolt"></i>
                        Promoções
                    </button>
                    <a href="recomendacao.php" class="btn btn-primary">
                        <i class="fas fa-magic"></i>
                        Descubra seu tipo de corpo
                    </a>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <strong>2.000+</strong>
                    <span>Peças Disponíveis</span>
                </div>
                <div class="stat">
                    <strong>500+</strong>
                    <span>Clientes Satisfeitos</span>
                </div>
                <div class="stat">
                    <strong>70%</strong>
                    <span>Economia Média</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorias -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Nossas Categorias</h2>
            <div class="categories-grid">
                <?php foreach($categorias as $key => $categoria): ?>
                <div class="category-card <?php echo $categoria['destaque'] ? 'featured' : ''; ?>">
                    <div class="category-image">
                        <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="<?php echo $categoria['nome']; ?>">
                    </div>
                    <div class="category-content">
                        <h3><?php echo $categoria['nome']; ?></h3>
                        <span class="item-count"><?php echo $categoria['quantidade']; ?> peças</span>
                        <?php if($categoria['destaque']): ?>
                        <span class="featured-badge">Destaque</span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Destaques da Semana</h2>
                <a href="#" class="see-all">Ver Todos <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="products-grid">
                <?php foreach($produtos_destaque as $produto): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                        <div class="product-badges">
                            <?php if(isset($produto['preco_promocional'])): ?>
                            <span class="badge discount">-<?php echo number_format((($produto['preco_original'] - $produto['preco_promocional']) / $produto['preco_original']) * 100, 0); ?>%</span>
                            <?php endif; ?>
                            <span class="badge category"><?php echo $categorias[$produto['categoria']]['nome']; ?></span>
                        </div>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $produto['nome']; ?></h3>
                        <div class="price">
                            <?php if(isset($produto['preco_promocional'])): ?>
                            <span class="original-price">R$ <?php echo number_format($produto['preco_original'], 2, ',', '.'); ?></span>
                            <span class="current-price">R$ <?php echo number_format($produto['preco_promocional'], 2, ',', '.'); ?></span>
                            <?php else: ?>
                            <span class="current-price">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></span>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-bag"></i>
                            Adicionar
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Banner Plus Size -->
    <section class="plus-size-banner">
        <div class="container">
            <div class="banner-content">
                <div class="banner-text">
                    <h2>Coleção <span class="highlight">Plus Size</span></h2>
                    <p>Estilo, conforto e autoestima para todos os tamanhos. Peças selecionadas especialmente para você!</p>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> Tamanhos 44 ao 60</li>
                        <li><i class="fas fa-check"></i> Tecidos de qualidade</li>
                        <li><i class="fas fa-check"></i> Estilo fashion</li>
                        <li><i class="fas fa-check"></i> Até 70% mais barato</li>
                    </ul>
                    <button class="btn btn-primary btn-large">
                        <i class="fas fa-tshirt"></i>
                        Explorar Coleção
                    </button>
                </div>
                <div class="banner-image">
                    <img src="https://plus.unsplash.com/premium_photo-1661526405741-663595cb4368?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Coleção Plus Size">
                </div>
            </div>
        </div>
    </section>

    <!-- Novidades -->
    <section class="new-arrivals">
        <div class="container">
            <h2 class="section-title">Novidades no Brechó</h2>
            <div class="products-grid">
                <?php foreach($novidades as $produto): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                        <span class="badge new">Novo</span>
                        <div class="product-actions">
                            <button class="action-btn"><i class="fas fa-heart"></i></button>
                            <button class="action-btn"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $produto['nome']; ?></h3>
                        <span class="product-category"><?php echo $categorias[$produto['categoria']]['nome']; ?></span>
                        <div class="price">
                            <span class="current-price">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-bag"></i>
                            Adicionar
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefícios -->
    <section class="benefits">
        <div class="container">
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>Moda Sustentável</h3>
                    <p>Contribua para um planeta mais verde com consumo consciente</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Preços Acessíveis</h3>
                    <p>Economize até 70% em peças de qualidade</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Qualidade Garantida</h3>
                    <p>Todas as peças são higienizadas e revisadas</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Entrega Rápida</h3>
                    <p>Receba em até 48h na região metropolitana</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="logo">
                        <i class="fas fa-leaf"></i>
                        <span>EcoStyle Brechó</span>
                    </div>
                    <p>Moda sustentável para todos os corpos. Encontre estilo, economia e consciência ambiental.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Categorias</h4>
                    <ul>
                        <li><a href="#">Plus Size</a></li>
                        <li><a href="#">Feminino</a></li>
                        <li><a href="#">Masculino</a></li>
                        <li><a href="#">Infantil</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Institucional</h4>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Como Funciona</a></li>
                        <li><a href="#">Trocas e Devoluções</a></li>
                        <li><a href="#">Perguntas Frequentes</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Atendimento</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> (11) 9999-9999</li>
                        <li><i class="fas fa-envelope"></i> contato@ecostyle.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> São Paulo - SP</li>
                        <li><i class="fas fa-clock"></i> Seg à Sex: 9h-18h</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 EcoStyle Brechó. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>