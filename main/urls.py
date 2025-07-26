from django.urls import path
from . import views

app_name = 'main'

urlpatterns = [
    path('', views.home, name='home'),
    path('services/', views.services, name='services'),
    path('technologies/', views.technologies, name='technologies'),
    path('portfolio/', views.portfolio, name='portfolio'),
    path('contact/', views.contact, name='contact'),
    path('about/', views.about, name='about'),
]