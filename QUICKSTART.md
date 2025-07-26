# 🚀 Guia de Início Rápido - DevStudio

## ⚡ Início Rápido

### 1. Clone e Configure
```bash
git clone <seu-repositorio>
cd devstudio
```

### 2. Execute o Script de Inicialização
```bash
./start.sh
```

### 3. Acesse o Site
Abra seu navegador e acesse: **http://localhost:8000**

---

## 📋 Páginas Disponíveis

- **🏠 Home**: `/` - Página inicial com hero section
- **🛠️ Serviços**: `/services/` - Lista de serviços oferecidos
- **💻 Tecnologias**: `/technologies/` - Stack tecnológico
- **📂 Portfólio**: `/portfolio/` - Projetos realizados
- **📞 Contato**: `/contact/` - Formulário de contato
- **👥 Sobre**: `/about/` - Informações da empresa

---

## 🛠️ Comandos Úteis

### Desenvolvimento
```bash
# Ativar ambiente virtual
source venv/bin/activate

# Executar servidor
python manage.py runserver

# Criar superusuário
python manage.py createsuperuser

# Executar migrações
python manage.py migrate
```

### Produção
```bash
# Deploy automático
./deploy.sh

# Com Docker
docker-compose up -d

# Coletar arquivos estáticos
python manage.py collectstatic
```

---

## 🎨 Personalização

### Cores e Estilos
Edite `static/css/style.css` para alterar:
- Cores principais
- Gradientes
- Animações
- Layout responsivo

### Conteúdo
Edite `main/views.py` para modificar:
- Textos das páginas
- Dados dos serviços
- Informações da equipe
- Projetos do portfólio

### Configurações
Edite `devstudio/settings.py` para:
- Configurações do banco
- Variáveis de ambiente
- Configurações de email

---

## 📱 Responsividade

O site é totalmente responsivo e funciona em:
- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px  
- **Mobile**: 320px - 767px

---

## 🔧 Tecnologias Utilizadas

### Backend
- **Python 3.13**
- **Django 5.2.4**
- **SQLite** (desenvolvimento)

### Frontend
- **HTML5** + **CSS3**
- **JavaScript** (ES6+)
- **Bootstrap 5.3.0**
- **Font Awesome 6.4.0**

---

## 🚀 Deploy

### Opção 1: Script Automático
```bash
./deploy.sh
```

### Opção 2: Docker
```bash
docker-compose up -d
```

### Opção 3: Manual
```bash
# Configurar variáveis de ambiente
cp .env.example .env
# Editar .env com suas configurações

# Instalar dependências
pip install -r requirements.txt

# Configurar banco de dados
python manage.py migrate

# Coletar arquivos estáticos
python manage.py collectstatic

# Configurar servidor web (Nginx + Gunicorn)
```

---

## 📞 Suporte

- **Email**: contato@devstudio.com
- **Telefone**: (11) 99999-9999
- **Documentação**: README.md

---

## 🎯 Próximos Passos

1. **Personalize o conteúdo** para sua empresa
2. **Configure o domínio** e SSL
3. **Configure o email** para o formulário de contato
4. **Adicione analytics** (Google Analytics)
5. **Configure backup** automático do banco
6. **Monitore logs** e performance

---

**✨ Desenvolvido com ❤️ pela equipe DevStudio**