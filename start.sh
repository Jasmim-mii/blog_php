#!/bin/bash

# Script de inicialização do DevStudio
echo "🚀 Iniciando DevStudio..."

# Verificar se o ambiente virtual existe
if [ ! -d "venv" ]; then
    echo "📦 Criando ambiente virtual..."
    python3 -m venv venv
fi

# Ativar ambiente virtual
echo "🔧 Ativando ambiente virtual..."
source venv/bin/activate

# Instalar dependências
echo "📥 Instalando dependências..."
pip install -r requirements.txt

# Executar migrações
echo "🗄️ Executando migrações..."
python manage.py migrate

# Iniciar servidor
echo "🌐 Iniciando servidor de desenvolvimento..."
echo "📍 Acesse: http://localhost:8000"
echo "🛑 Para parar o servidor, pressione Ctrl+C"
echo ""

python manage.py runserver 0.0.0.0:8000