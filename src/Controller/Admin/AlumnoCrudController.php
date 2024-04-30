<?php
namespace App\Controller\Admin;

use App\Entity\Alumno;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class AlumnoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Alumno::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),  // Escondemos el ID en el formulario
            TextField::new('nombre', 'Nombre'),
            EmailField::new('correo', 'Correo Electrónico'),
            DateField::new('fechaNacimiento', 'Fecha de Nacimiento')
                ->setFormat('dd-MM-yyyy'),  // Ajusta el formato de fecha según necesidades
            AssociationField::new('grupo', 'Grupo')
                ->setCrudController(GrupoCrudController::class)  // Especifica el controlador CRUD para el Grupo si es necesario
        ];
    }
}

