# DevStudio - Site de Desenvolvimento Web e Mobile

Um site moderno e responsivo para uma empresa de desenvolvimento web e mobile, construído com Python Django e HTML/CSS/JavaScript.

## 🚀 Características

- **Design Moderno**: Interface limpa e profissional com gradientes e animações
- **Totalmente Responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- **Múltiplas Páginas**: Home, Serviços, Tecnologias, Portfólio, Sobre e Contato
- **Formulário de Contato**: Com validação e feedback visual
- **Filtros de Portfólio**: Sistema de filtros para projetos
- **Animações**: Efeitos suaves e interativos
- **SEO Otimizado**: Estrutura semântica e meta tags

## 🛠️ Tecnologias Utilizadas

### Backend
- **Python 3.13**
- **Django 5.2.4**
- **SQLite** (banco de dados)

### Frontend
- **HTML5**
- **CSS3** (com animações e gradientes)
- **JavaScript** (ES6+)
- **Bootstrap 5.3.0**
- **Font Awesome 6.4.0**
- **Google Fonts** (Inter)

## 📁 Estrutura do Projeto

```
devstudio/
├── devstudio/          # Configurações do projeto Django
│   ├── settings.py     # Configurações do Django
│   ├── urls.py         # URLs principais
│   └── wsgi.py         # Configuração WSGI
├── main/               # App principal
│   ├── views.py        # Views das páginas
│   ├── urls.py         # URLs do app
│   └── models.py       # Modelos (se necessário)
├── templates/          # Templates HTML
│   ├── base.html       # Template base
│   └── main/           # Templates específicos
│       ├── home.html
│       ├── services.html
│       ├── technologies.html
│       ├── portfolio.html
│       ├── contact.html
│       └── about.html
├── static/             # Arquivos estáticos
│   ├── css/
│   │   └── style.css   # CSS personalizado
│   ├── js/
│   │   └── main.js     # JavaScript principal
│   └── images/         # Imagens
├── manage.py           # Script de gerenciamento Django
├── requirements.txt    # Dependências Python
└── README.md          # Documentação
```

## 🚀 Instalação e Configuração

### Pré-requisitos
- Python 3.8 ou superior
- pip (gerenciador de pacotes Python)

### Passos para Instalação

1. **Clone o repositório**
   ```bash
   git clone <url-do-repositorio>
   cd devstudio
   ```

2. **Crie um ambiente virtual**
   ```bash
   python3 -m venv venv
   source venv/bin/activate  # Linux/Mac
   # ou
   venv\Scripts\activate     # Windows
   ```

3. **Instale as dependências**
   ```bash
   pip install -r requirements.txt
   ```

4. **Execute as migrações**
   ```bash
   python manage.py migrate
   ```

5. **Crie um superusuário (opcional)**
   ```bash
   python manage.py createsuperuser
   ```

6. **Execute o servidor de desenvolvimento**
   ```bash
   python manage.py runserver
   ```

7. **Acesse o site**
   Abra seu navegador e acesse: `http://127.0.0.1:8000`

## 📄 Páginas Disponíveis

### 🏠 Home (`/`)
- Hero section com call-to-action
- Preview dos serviços
- Preview das tecnologias
- Seção CTA

### 🛠️ Serviços (`/services/`)
- Lista detalhada de serviços
- Tecnologias utilizadas em cada serviço
- Processo de desenvolvimento
- Seção CTA

### 💻 Tecnologias (`/technologies/`)
- Categorias de tecnologias (Frontend, Backend, Mobile, Database)
- Ícones coloridos para cada tecnologia
- Descrições das tecnologias
- Seção "Por que escolher nossas tecnologias"

### 📂 Portfólio (`/portfolio/`)
- Filtros por categoria (Web, Mobile, E-commerce, Backend)
- Cards de projetos com hover effects
- Estatísticas da empresa
- Depoimentos de clientes

### 📞 Contato (`/contact/`)
- Formulário de contato completo
- Validação de campos
- Informações de contato
- FAQ

### 👥 Sobre (`/about/`)
- História da empresa
- Valores da empresa
- Equipe com perfis
- Cultura da empresa

## 🎨 Características de Design

### Cores Principais
- **Primária**: #0d6efd (Azul Bootstrap)
- **Secundária**: #6c757d (Cinza)
- **Sucesso**: #198754 (Verde)
- **Aviso**: #ffc107 (Amarelo)
- **Perigo**: #dc3545 (Vermelho)
- **Info**: #0dcaf0 (Ciano)

### Gradientes
- **Hero Section**: `linear-gradient(135deg, #667eea 0%, #764ba2 100%)`
- **Footer**: `linear-gradient(135deg, #2c3e50 0%, #34495e 100%)`

### Tipografia
- **Fonte Principal**: Inter (Google Fonts)
- **Pesos**: 300, 400, 500, 600, 700

## ⚡ Funcionalidades JavaScript

### Animações
- **Scroll Animations**: Elementos aparecem conforme o scroll
- **Counter Animation**: Números animados nas estatísticas
- **Typing Effect**: Efeito de digitação no hero
- **Parallax**: Efeito parallax no hero section

### Interatividade
- **Portfolio Filters**: Filtros funcionais para projetos
- **Form Validation**: Validação em tempo real
- **Notifications**: Sistema de notificações
- **Smooth Scrolling**: Navegação suave
- **Back to Top**: Botão para voltar ao topo

### Responsividade
- **Mobile Menu**: Menu hambúrguer para mobile
- **Responsive Grid**: Layout adaptativo
- **Touch Friendly**: Otimizado para touch

## 🔧 Configurações Personalizáveis

### Variáveis CSS
As cores e estilos podem ser facilmente alterados editando o arquivo `static/css/style.css`:

```css
:root {
    --primary-color: #0d6efd;
    --secondary-color: #6c757d;
    --success-color: #198754;
    --warning-color: #ffc107;
    --danger-color: #dc3545;
    --info-color: #0dcaf0;
}
```

### Conteúdo Dinâmico
O conteúdo das páginas pode ser modificado editando as views em `main/views.py`:

```python
def home(request):
    context = {
        'title': 'Seu Título Personalizado',
        'description': 'Sua descrição personalizada'
    }
    return render(request, 'main/home.html', context)
```

## 📱 Responsividade

O site é totalmente responsivo e funciona em:

- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px
- **Mobile**: 320px - 767px

### Breakpoints Bootstrap
- `xs`: < 576px
- `sm`: ≥ 576px
- `md`: ≥ 768px
- `lg`: ≥ 992px
- `xl`: ≥ 1200px
- `xxl`: ≥ 1400px

## 🚀 Deploy

### Para Produção

1. **Configure as variáveis de ambiente**
   ```bash
   export DEBUG=False
   export SECRET_KEY='sua-chave-secreta-aqui'
   export ALLOWED_HOSTS='seu-dominio.com'
   ```

2. **Colete os arquivos estáticos**
   ```bash
   python manage.py collectstatic
   ```

3. **Configure o servidor web**
   - Nginx + Gunicorn (recomendado)
   - Apache + mod_wsgi
   - Heroku, DigitalOcean, AWS, etc.

### Exemplo de configuração Nginx
```nginx
server {
    listen 80;
    server_name seu-dominio.com;
    
    location /static/ {
        alias /caminho/para/seu/projeto/static/;
    }
    
    location / {
        proxy_pass http://127.0.0.1:8000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
    }
}
```

## 🤝 Contribuição

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 📞 Suporte

Se você tiver alguma dúvida ou problema:

- Abra uma issue no GitHub
- Entre em contato: contato@devstudio.com
- Telefone: (11) 99999-9999

## 🎯 Roadmap

- [ ] Sistema de blog
- [ ] Área administrativa personalizada
- [ ] Sistema de orçamentos online
- [ ] Chat em tempo real
- [ ] Integração com redes sociais
- [ ] Sistema de newsletter
- [ ] Analytics integrado
- [ ] PWA (Progressive Web App)

---

**Desenvolvido com ❤️ pela equipe DevStudio**
