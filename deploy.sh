#!/bin/bash

# Script de Deploy para Produção - DevStudio
echo "🚀 Iniciando deploy do DevStudio..."

# Verificar se estamos no branch correto
if [ "$(git branch --show-current)" != "main" ]; then
    echo "❌ Erro: Deploy deve ser feito do branch main"
    exit 1
fi

# Verificar se há mudanças não commitadas
if [ -n "$(git status --porcelain)" ]; then
    echo "❌ Erro: Há mudanças não commitadas. Faça commit antes do deploy."
    exit 1
fi

# Ativar ambiente virtual
echo "🔧 Ativando ambiente virtual..."
source venv/bin/activate

# Instalar/atualizar dependências
echo "📥 Instalando dependências..."
pip install -r requirements.txt

# Executar migrações
echo "🗄️ Executando migrações..."
python manage.py migrate

# Coletar arquivos estáticos
echo "📦 Coletando arquivos estáticos..."
python manage.py collectstatic --noinput

# Verificar configurações
echo "🔍 Verificando configurações..."
python manage.py check --deploy

# Criar diretório de logs se não existir
mkdir -p logs

# Backup do banco de dados (se necessário)
echo "💾 Fazendo backup do banco de dados..."
python manage.py dumpdata > backup_$(date +%Y%m%d_%H%M%S).json

# Reiniciar serviços (se usando systemd)
if command -v systemctl &> /dev/null; then
    echo "🔄 Reiniciando serviços..."
    sudo systemctl restart devstudio
    sudo systemctl restart nginx
fi

# Verificar status dos serviços
echo "✅ Verificando status dos serviços..."
if command -v systemctl &> /dev/null; then
    sudo systemctl status devstudio --no-pager -l
    sudo systemctl status nginx --no-pager -l
fi

echo "🎉 Deploy concluído com sucesso!"
echo "📍 Site disponível em: http://seu-dominio.com"
echo "📊 Logs disponíveis em: logs/django.log"