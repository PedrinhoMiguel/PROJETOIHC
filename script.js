// JavaScript para funcionalidades do brechó
document.addEventListener('DOMContentLoaded', function() {
    // Filtro de produtos
    const filterButtons = document.querySelectorAll('.nav-link');
    const productCards = document.querySelectorAll('.product-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class de todos os botões
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Adiciona active class ao botão clicado
            this.classList.add('active');
            
            const filter = this.textContent.trim();
            
            productCards.forEach(card => {
                if (filter === 'Início' || card.querySelector('.category').textContent.includes(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
