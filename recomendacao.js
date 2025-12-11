// Quiz de tipo de corpo
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    let userAnswers = {};
    const totalSteps = 2;

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const resultsSection = document.getElementById('results');

    // Avançar para próxima pergunta
    nextBtn.addEventListener('click', function() {
        if (currentStep < totalSteps) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep++;
            document.getElementById(`step${currentStep}`).classList.add('active');
            prevBtn.disabled = false;
            
            if (currentStep === totalSteps) {
                nextBtn.innerHTML = 'Ver Resultados <i class="fas fa-chart-bar"></i>';
            }
        } else {
            showResults();
        }
    });

    // Voltar para pergunta anterior
    prevBtn.addEventListener('click', function() {
        if (currentStep > 1) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep--;
            document.getElementById(`step${currentStep}`).classList.add('active');
            
            if (currentStep === 1) {
                prevBtn.disabled = true;
            }
            nextBtn.innerHTML = 'Continuar <i class="fas fa-arrow-right"></i>';
        }
    });

    // Selecionar opção do quiz
    document.querySelectorAll('.quiz-option').forEach(option => {
        option.addEventListener('click', function() {
            const type = this.getAttribute('data-type');
            userAnswers[`step${currentStep}`] = type;
            
            // Remove seleção anterior
            document.querySelectorAll('.quiz-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            
            // Adiciona seleção atual
            this.classList.add('selected');
        });
    });

    // Mostrar resultados
    function showResults() {
        // Lógica simples para determinar tipo de corpo baseado nas respostas
        let bodyType = determineBodyType();
        
        document.getElementById('bodyTypeName').textContent = bodyTypes[bodyType].nome;
        document.getElementById('bodyTypeDescription').textContent = bodyTypes[bodyType].descricao;
        
        // Características
        const characteristicsList = document.getElementById('bodyCharacteristics');
        characteristicsList.innerHTML = '';
        bodyTypes[bodyType].caracteristicas.forEach(char => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-check"></i> ${char}`;
            characteristicsList.appendChild(li);
        });
        
        // Dicas de estilo
        const tipsList = document.getElementById('styleTips');
        tipsList.innerHTML = '';
        bodyTypes[bodyType].dicas.forEach(tip => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-star"></i> ${tip}`;
            tipsList.appendChild(li);
        });
        
        // Produtos recomendados
        const productsGrid = document.getElementById('recommendedProducts');
        productsGrid.innerHTML = '';
        
        if (recommendedProducts[bodyType]) {
            recommendedProducts[bodyType].forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.innerHTML = `
                    <div class="product-image">
                        <img src="${product.imagem}" alt="${product.nome}">
                        <span class="badge category">${product.categoria}</span>
                    </div>
                    <div class="product-info">
                        <h3>${product.nome}</h3>
                        <div class="price">
                            <span class="current-price">R$ ${product.preco.toFixed(2).replace('.', ',')}</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="fas fa-shopping-bag"></i>
                            Adicionar
                        </button>
                    </div>
                `;
                productsGrid.appendChild(productCard);
            });
        }
        
        // Mostrar seção de resultados
        document.querySelector('.body-type-quiz').style.display = 'none';
        resultsSection.style.display = 'block';
        
        // Rolar para resultados
        resultsSection.scrollIntoView({ behavior: 'smooth' });
    }

    // Determinar tipo de corpo (lógica simplificada)
    function determineBodyType() {
        const step1 = userAnswers['step1'];
        const step2 = userAnswers['step2'];
        
        // Lógica básica de determinação
        if (step1 === 'triangulo_invertido' && step2 === 'ampulheta') return 'ampulheta';
        if (step1 === 'triangulo') return 'triangulo';
        if (step1 === 'retangulo' && step2 === 'retangulo') return 'retangulo';
        if (step2 === 'oval') return 'oval';
        
        return 'retangulo'; // padrão
    }

    // Ver recomendações por tipo de corpo
    document.querySelectorAll('.see-recommendations').forEach(button => {
        button.addEventListener('click', function() {
            const bodyType = this.getAttribute('data-type');
            
            document.getElementById('bodyTypeName').textContent = bodyTypes[bodyType].nome;
            document.getElementById('bodyTypeDescription').textContent = bodyTypes[bodyType].descricao;
            
            // Atualizar características e dicas
            const characteristicsList = document.getElementById('bodyCharacteristics');
            characteristicsList.innerHTML = '';
            bodyTypes[bodyType].caracteristicas.forEach(char => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-check"></i> ${char}`;
                characteristicsList.appendChild(li);
            });
            
            const tipsList = document.getElementById('styleTips');
            tipsList.innerHTML = '';
            bodyTypes[bodyType].dicas.forEach(tip => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-star"></i> ${tip}`;
                tipsList.appendChild(li);
            });
            
            // Atualizar produtos recomendados
            const productsGrid = document.getElementById('recommendedProducts');
            productsGrid.innerHTML = '';
            
            if (recommendedProducts[bodyType]) {
                recommendedProducts[bodyType].forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className = 'product-card';
                    productCard.innerHTML = `
                        <div class="product-image">
                            <img src="${product.imagem}" alt="${product.nome}">
                            <span class="badge category">${product.categoria}</span>
                        </div>
                        <div class="product-info">
                            <h3>${product.nome}</h3>
                            <div class="price">
                                <span class="current-price">R$ ${product.preco.toFixed(2).replace('.', ',')}</span>
                            </div>
                            <button class="btn btn-add-cart">
                                <i class="fas fa-shopping-bag"></i>
                                Adicionar
                            </button>
                        </div>
                    `;
                    productsGrid.appendChild(productCard);
                });
            }
            
            // Mostrar resultados e rolar
            document.querySelector('.body-type-quiz').style.display = 'none';
            resultsSection.style.display = 'block';
            resultsSection.scrollIntoView({ behavior: 'smooth' });
        });
    });
});