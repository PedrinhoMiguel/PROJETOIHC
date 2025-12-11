<?php
// Dados simulados do carrinho
$carrinho = [
    [
        "id" => 1,
        "nome" => "Vestido Floral Plus Size",
        "tamanho" => "48",
        "cor" => "Floral",
        "preco" => 79.90,
        "quantidade" => 1,
        "imagem" => "https://images.unsplash.com/photo-1595777457583-95e059d581b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
    ],
    [
        "id" => 2,
        "nome" => "Blazer Elegante Tam. G",
        "tamanho" => "50",
        "cor" => "Preto",
        "preco" => 59.90,
        "quantidade" => 1,
        "imagem" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
    ]
];

$subtotal = array_sum(array_column($carrinho, 'preco'));
$frete = 15.90;
$total = $subtotal + $frete;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras - EcoStyle Brechó</title>
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
                        <button class="icon-btn">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="badge"><?php echo count($carrinho); ?></span>
                        </button>
                        <button class="icon-btn">
                            <i class="fas fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="nav-link">Início</a></li>
                    <li><a href="recomendacao.php" class="nav-link">Meu Estilo</a></li>
                    <li><a href="index.php#categorias" class="nav-link">Plus Size</a></li>
                    <li><a href="index.php#categorias" class="nav-link">Feminino</a></li>
                    <li><a href="index.php#categorias" class="nav-link">Masculino</a></li>
                    <li><a href="compras.php" class="nav-link active">Carrinho</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <nav>
                <a href="index.php">Início</a>
                <i class="fas fa-chevron-right"></i>
                <span>Carrinho de Compras</span>
            </nav>
        </div>
    </section>

    <!-- Carrinho -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="page-title">Carrinho de Compras</h1>
            
            <div class="cart-content">
                <div class="cart-items">
                    <?php if(empty($carrinho)): ?>
                        <div class="empty-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <h3>Seu carrinho está vazio</h3>
                            <p>Adicione alguns produtos incríveis!</p>
                            <a href="index.php" class="btn btn-primary">Continuar Comprando</a>
                        </div>
                    <?php else: ?>
                        <?php foreach($carrinho as $item): ?>
                        <div class="cart-item">
                            <div class="item-image">
                                <img src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>">
                            </div>
                            <div class="item-details">
                                <h3><?php echo $item['nome']; ?></h3>
                                <div class="item-attributes">
                                    <span class="attribute">Tamanho: <?php echo $item['tamanho']; ?></span>
                                    <span class="attribute">Cor: <?php echo $item['cor']; ?></span>
                                </div>
                                <div class="item-actions">
                                    <button class="action-link"><i class="fas fa-heart"></i> Salvar</button>
                                    <button class="action-link"><i class="fas fa-trash"></i> Remover</button>
                                </div>
                            </div>
                            <div class="item-controls">
                                <div class="quantity-selector">
                                    <button class="qty-btn"><i class="fas fa-minus"></i></button>
                                    <span class="quantity"><?php echo $item['quantidade']; ?></span>
                                    <button class="qty-btn"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="item-price">
                                    R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="cart-summary">
                    <div class="summary-card">
                        <h3>Resumo do Pedido</h3>
                        <div class="summary-line">
                            <span>Subtotal</span>
                            <span>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></span>
                        </div>
                        <div class="summary-line">
                            <span>Frete</span>
                            <span>R$ <?php echo number_format($frete, 2, ',', '.'); ?></span>
                        </div>
                        <div class="summary-line total">
                            <span>Total</span>
                            <span>R$ <?php echo number_format($total, 2, ',', '.'); ?></span>
                        </div>
                        <button class="btn btn-primary btn-large btn-block">
                            <i class="fas fa-lock"></i>
                            Finalizar Compra
                        </button>
                        <a href="index.php" class="btn btn-secondary btn-block">
                            <i class="fas fa-arrow-left"></i>
                            Continuar Comprando
                        </a>
                    </div>

                    <div class="security-badges">
                        <div class="badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>Compra 100% Segura</span>
                        </div>
                        <div class="badge">
                            <i class="fas fa-truck"></i>
                            <span>Entrega Garantida</span>
                        </div>
                        <div class="badge">
                            <i class="fas fa-undo"></i>
                            <span>Troca Grátis</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produtos Recomendados -->
            <div class="recommended-products">
                <h2>Quem viu isso também gostou</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Calça Jeans">
                            <div class="product-badges">
                                <span class="badge discount">-30%</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Calça Jeans Wide Leg</h3>
                            <div class="price">
                                <span class="original-price">R$ 99,90</span>
                                <span class="current-price">R$ 69,90</span>
                            </div>
                            <button class="btn btn-add-cart">
                                <i class="fas fa-shopping-bag"></i>
                                Adicionar
                            </button>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1485231183945-fffde7cb39ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Conjunto Verão">
                            <span class="badge new">Novo</span>
                        </div>
                        <div class="product-info">
                            <h3>Conjunto Verão Plus Size</h3>
                            <div class="price">
                                <span class="current-price">R$ 119,90</span>
                            </div>
                            <button class="btn btn-add-cart">
                                <i class="fas fa-shopping-bag"></i>
                                Adicionar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>