<?php

namespace App\Controller\Admin;

use App\Entity\Alumno;
use App\Entity\Edificio;
use App\Entity\Espacio;
use App\Entity\Evento;
use App\Entity\Grupo;
use App\Entity\NivelEducativo;
use App\Entity\Ponente;
use App\Entity\Recurso;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->redirectToRoute('admin_actividad');
    }

    #[Route('/admin/actividad', name: 'admin_actividad')]
    public function actividad(): Response
    {
        return $this->render('admin/index.html.twig');
    }




    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administrador Las Fuentezuelas');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Página Principal', 'fas fa-arrow-left', 'http://127.0.0.1:8000');
        
        yield MenuItem::section('Gestión de Eventos');
        yield MenuItem::linkToRoute('Actividades', 'fas fa-map-marker-alt', 'admin_actividad');
        yield MenuItem::linkToCrud('Eventos', 'fas fa-map-calendar-alt', Evento::class);

        if ($this->isGranted('ROLE_ADMIN')) {
            
            yield MenuItem::section('Gestión de Recursos');
            yield MenuItem::linkToCrud('Edificios', 'fas fa-building', Edificio::class);
            yield MenuItem::linkToCrud('Recursos', 'fas fa-boxes', Recurso::class);
            yield MenuItem::linkToCrud('Espacios', 'fas fa-map-marker-alt', Espacio::class);
            yield MenuItem::linkToCrud('Ponentes', 'fas fa-chalkboard-teacher', Ponente::class);

            yield MenuItem::section('Gestión Educativa');
            yield MenuItem::linkToCrud('Nivel Educativo', 'fas fa-graduation-cap', NivelEducativo::class);
            yield MenuItem::linkToCrud('Usuarios', 'fas fa-user', User::class);
            yield MenuItem::linkToCrud('Alumnos', 'fas fa-user-graduate', Alumno::class);
            yield MenuItem::linkToCrud('Grupos', 'fas fa-users', Grupo::class);
        }
    }

    public function configureActions(): Actions
    {
        return parent::configureActions()
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
