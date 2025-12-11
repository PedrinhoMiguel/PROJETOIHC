# EcoStyle Brechó - Guia de Instalação e Uso

Bem-vindo ao **EcoStyle Brechó**, um site de moda sustentável com foco em Plus Size. Este guia irá ajudá-lo a configurar e executar o site usando o XAMPP.

---

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado:

- **XAMPP** (versão 7.4 ou superior recomendada)
  - Download: [https://www.apachefriends.org/](https://www.apachefriends.org/)
  - O XAMPP inclui Apache, MySQL e PHP

---

## Instalação e Configuração

### 1. Instalar o XAMPP

1. Baixe o XAMPP do site oficial
2. Execute o instalador
3. Escolha os componentes (Apache e PHP são obrigatórios)
4. Instale na pasta padrão: `C:\xampp`

### 2. Verificar os Arquivos do Projeto

Os arquivos do projeto já devem estar localizados em:
```
C:\xampp\htdocs\PROJETOIHC\
```

Estrutura de arquivos:
```
PROJETOIHC/
├── index.php           # Página principal
├── recomendacao.php    # Sistema de recomendação de roupas
├── compras.php         # Carrinho de compras
├── styles.css          # Estilos do site
├── script.js           # Scripts gerais
├── recomendacao.js     # Scripts da página de recomendação
└── README.md           # Este arquivo
```

---

## Como Executar o Site

### Passo 1: Iniciar o XAMPP

1. Abra o **XAMPP Control Panel**
   - Procure por "XAMPP Control Panel" no menu Iniciar do Windows
   - Ou execute: `C:\xampp\xampp-control.exe`

2. Inicie o servidor **Apache**
   - Clique no botão **"Start"** ao lado de "Apache"
   - Aguarde até que o status fique verde
   - O Apache geralmente roda na porta 80

> **Problema com a porta 80?**
> 
> Se o Apache não iniciar, pode ser que a porta 80 esteja em uso. Soluções:
> - Pare o Skype ou outros programas que usam a porta 80
> - Configure o Apache para usar outra porta (ex: 8080)
> - Para mudar a porta: clique em "Config" > "Apache (httpd.conf)" e altere `Listen 80` para `Listen 8080`

### Passo 2: Acessar o Site

1. Abra seu navegador preferido (Chrome, Firefox, Edge, etc.)

2. Digite um dos seguintes endereços na barra de URL:
   ```
   http://localhost/PROJETOIHC/
   ```
   ou
   ```
   http://localhost/PROJETOIHC/index.php
   ```

3. O site deve carregar automaticamente!

---

## Páginas Disponíveis

### Página Principal
```
http://localhost/PROJETOIHC/index.php
```
- Exibe categorias de produtos
- Destaques da semana
- Banner Plus Size
- Novidades do brechó

### Sistema de Recomendação
```
http://localhost/PROJETOIHC/recomendacao.php
```
- Quiz interativo para descobrir seu tipo de corpo
- Recomendações personalizadas de roupas
- Baseado em medidas e preferências

### Carrinho de Compras
```
http://localhost/PROJETOIHC/compras.php
```
- Visualização do carrinho
- Gerenciamento de produtos
- Resumo do pedido

---

## Solução de Problemas

### Erro: "Página não encontrada" (404)

**Solução:**
- Verifique se o Apache está rodando no XAMPP Control Panel
- Confirme que os arquivos estão em `C:\xampp\htdocs\PROJETOIHC\`
- Verifique se digitou o URL corretamente

### Erro: "Acesso negado" ou "Forbidden"

**Solução:**
1. Verifique as permissões da pasta `PROJETOIHC`
2. No XAMPP Control Panel, clique em "Config" > "Apache (httpd.conf)"
3. Procure por `<Directory "C:/xampp/htdocs">` e certifique-se de que tem:
   ```apache
   Require all granted
   ```

### Página em branco ou erro de PHP

**Solução:**
- Verifique se o PHP está instalado: crie um arquivo `info.php` com `<?php phpinfo(); ?>` e acesse
- Verifique os logs de erro em: `C:\xampp\apache\logs\error.log`
- Certifique-se de que a extensão do arquivo é `.php` e não `.html`

### CSS ou JavaScript não carregam

**Solução:**
- Pressione `Ctrl + F5` para limpar o cache do navegador
- Verifique se os arquivos `styles.css`, `script.js` e `recomendacao.js` existem na pasta
- Abra o Console do navegador (F12) para ver erros

---

## Recursos do Site

### Funcionalidades Principais

- **Design Responsivo**: Funciona em desktop, tablet e mobile
- **Categorias Dinâmicas**: Plus Size, Feminino, Masculino, Infantil, Acessórios
- **Sistema de Recomendação Inteligente**: Quiz personalizado
- **Carrinho de Compras**: Gerenciamento completo de produtos
- **Interface Moderna**: Design premium com animações suaves

### Tecnologias Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP 7.4+
- **Servidor**: Apache (via XAMPP)
- **Fontes**: Google Fonts (Inter)
- **Ícones**: Font Awesome 6.0

---

## Testando em Dispositivos Móveis

Para testar o site em seu celular na mesma rede Wi-Fi:

1. Descubra o IP do seu computador:
   - Abra o CMD (Prompt de Comando)
   - Digite: `ipconfig`
   - Procure por "Endereço IPv4" (ex: 192.168.1.100)

2. No celular, acesse:
   ```
   http://192.168.1.100/PROJETOIHC/
   ```
   (substitua pelo seu IP)

---

## Configurações Avançadas

### Habilitar Logs de Erro PHP

Edite o arquivo `php.ini`:
1. No XAMPP Control Panel, clique em "Config" > "PHP (php.ini)"
2. Procure e modifique:
   ```ini
   display_errors = On
   error_reporting = E_ALL
   ```
3. Salve e reinicie o Apache

### Configurar Virtual Host (Opcional)

Para acessar via `http://ecostyle.local` em vez de `http://localhost/PROJETOIHC/`:

1. Edite `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:
   ```apache
   <VirtualHost *:80>
       DocumentRoot "C:/xampp/htdocs/PROJETOIHC"
       ServerName ecostyle.local
   </VirtualHost>
   ```

2. Edite `C:\Windows\System32\drivers\etc\hosts` (como Administrador):
   ```
   127.0.0.1 ecostyle.local
   ```

3. Reinicie o Apache

---

## Suporte e Contato

Se você encontrar problemas:

1. **Verifique os logs**: `C:\xampp\apache\logs\error.log`
2. **Console do navegador**: Pressione F12 e veja a aba "Console"
3. **Documentação XAMPP**: [https://www.apachefriends.org/docs/](https://www.apachefriends.org/docs/)

---

## Notas Importantes

- Este é um projeto de **demonstração/mockup**
- Não há banco de dados real - os dados são simulados em PHP
- Não use em produção sem implementar segurança adequada
- As imagens são carregadas do Unsplash (requer internet)

---

## Checklist de Verificação

Antes de reportar problemas, verifique:

- [ ] XAMPP está instalado corretamente
- [ ] Apache está rodando (luz verde no Control Panel)
- [ ] Arquivos estão em `C:\xampp\htdocs\PROJETOIHC\`
- [ ] URL está correto: `http://localhost/PROJETOIHC/`
- [ ] Navegador está atualizado
- [ ] Cache do navegador foi limpo (Ctrl + F5)

---

## Pronto!

Agora você está pronto para explorar o **EcoStyle Brechó**! 

Aproveite a experiência de navegação e teste todas as funcionalidades do site.

**Desenvolvido para moda sustentável e inclusiva**

---

*Última atualização: Dezembro 2024*
