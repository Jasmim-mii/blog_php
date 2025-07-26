from django.shortcuts import render
from django.http import JsonResponse
import json

def home(request):
    """Página inicial do site"""
    context = {
        'title': 'DevStudio - Desenvolvimento Web e Mobile',
        'description': 'Criamos sites e aplicativos com as melhores tecnologias do mercado'
    }
    return render(request, 'main/home.html', context)

def services(request):
    """Página de serviços"""
    services_list = [
        {
            'name': 'Desenvolvimento Web',
            'description': 'Sites responsivos e modernos',
            'technologies': ['HTML5', 'CSS3', 'JavaScript', 'React', 'Vue.js'],
            'icon': 'fas fa-globe'
        },
        {
            'name': 'Aplicativos Mobile',
            'description': 'Apps nativos e híbridos',
            'technologies': ['React Native', 'Flutter', 'Swift', 'Kotlin'],
            'icon': 'fas fa-mobile-alt'
        },
        {
            'name': 'Backend Development',
            'description': 'APIs robustas e escaláveis',
            'technologies': ['Python', 'Node.js', 'Java', 'PHP', 'Go'],
            'icon': 'fas fa-server'
        },
        {
            'name': 'E-commerce',
            'description': 'Lojas virtuais completas',
            'technologies': ['WooCommerce', 'Shopify', 'Magento', 'Custom'],
            'icon': 'fas fa-shopping-cart'
        }
    ]
    
    context = {
        'title': 'Nossos Serviços',
        'services': services_list
    }
    return render(request, 'main/services.html', context)

def technologies(request):
    """Página de tecnologias"""
    tech_categories = {
        'frontend': {
            'name': 'Frontend',
            'technologies': [
                {'name': 'HTML5', 'icon': 'fab fa-html5', 'color': '#e34f26'},
                {'name': 'CSS3', 'icon': 'fab fa-css3-alt', 'color': '#1572b6'},
                {'name': 'JavaScript', 'icon': 'fab fa-js-square', 'color': '#f7df1e'},
                {'name': 'React', 'icon': 'fab fa-react', 'color': '#61dafb'},
                {'name': 'Vue.js', 'icon': 'fab fa-vuejs', 'color': '#4fc08d'},
                {'name': 'Angular', 'icon': 'fab fa-angular', 'color': '#dd0031'}
            ]
        },
        'backend': {
            'name': 'Backend',
            'technologies': [
                {'name': 'Python', 'icon': 'fab fa-python', 'color': '#3776ab'},
                {'name': 'Node.js', 'icon': 'fab fa-node-js', 'color': '#339933'},
                {'name': 'Java', 'icon': 'fab fa-java', 'color': '#ed8b00'},
                {'name': 'PHP', 'icon': 'fab fa-php', 'color': '#777bb4'},
                {'name': 'Go', 'icon': 'fas fa-code', 'color': '#00add8'},
                {'name': 'C#', 'icon': 'fas fa-code', 'color': '#239120'}
            ]
        },
        'mobile': {
            'name': 'Mobile',
            'technologies': [
                {'name': 'React Native', 'icon': 'fab fa-react', 'color': '#61dafb'},
                {'name': 'Flutter', 'icon': 'fas fa-mobile-alt', 'color': '#02569b'},
                {'name': 'Swift', 'icon': 'fab fa-swift', 'color': '#fa7343'},
                {'name': 'Kotlin', 'icon': 'fas fa-code', 'color': '#7f52ff'}
            ]
        },
        'database': {
            'name': 'Banco de Dados',
            'technologies': [
                {'name': 'PostgreSQL', 'icon': 'fas fa-database', 'color': '#336791'},
                {'name': 'MySQL', 'icon': 'fas fa-database', 'color': '#4479a1'},
                {'name': 'MongoDB', 'icon': 'fas fa-database', 'color': '#47a248'},
                {'name': 'Redis', 'icon': 'fas fa-database', 'color': '#dc382d'}
            ]
        }
    }
    
    context = {
        'title': 'Tecnologias',
        'tech_categories': tech_categories
    }
    return render(request, 'main/technologies.html', context)

def portfolio(request):
    """Página de portfólio"""
    projects = [
        {
            'title': 'E-commerce Moderno',
            'description': 'Loja virtual completa com sistema de pagamentos',
            'technologies': ['React', 'Node.js', 'MongoDB'],
            'image': 'project1.jpg',
            'category': 'ecommerce'
        },
        {
            'title': 'App de Delivery',
            'description': 'Aplicativo mobile para entrega de alimentos',
            'technologies': ['React Native', 'Firebase'],
            'image': 'project2.jpg',
            'category': 'mobile'
        },
        {
            'title': 'Dashboard Analytics',
            'description': 'Painel administrativo com gráficos e relatórios',
            'technologies': ['Vue.js', 'Python', 'PostgreSQL'],
            'image': 'project3.jpg',
            'category': 'web'
        },
        {
            'title': 'API REST',
            'description': 'API para integração de sistemas',
            'technologies': ['Python', 'Django', 'Redis'],
            'image': 'project4.jpg',
            'category': 'backend'
        }
    ]
    
    context = {
        'title': 'Portfólio',
        'projects': projects
    }
    return render(request, 'main/portfolio.html', context)

def contact(request):
    """Página de contato"""
    if request.method == 'POST':
        # Aqui você pode processar o formulário de contato
        data = json.loads(request.body)
        return JsonResponse({'status': 'success', 'message': 'Mensagem enviada com sucesso!'})
    
    context = {
        'title': 'Contato'
    }
    return render(request, 'main/contact.html', context)

def about(request):
    """Página sobre nós"""
    context = {
        'title': 'Sobre Nós',
        'team': [
            {
                'name': 'João Silva',
                'role': 'Desenvolvedor Full Stack',
                'bio': 'Especialista em React, Node.js e Python',
                'image': 'team1.jpg'
            },
            {
                'name': 'Maria Santos',
                'role': 'UX/UI Designer',
                'bio': 'Criativa e apaixonada por experiências digitais',
                'image': 'team2.jpg'
            },
            {
                'name': 'Pedro Costa',
                'role': 'Desenvolvedor Mobile',
                'bio': 'Especialista em React Native e Flutter',
                'image': 'team3.jpg'
            }
        ]
    }
    return render(request, 'main/about.html', context)
