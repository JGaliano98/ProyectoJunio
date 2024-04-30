<?php
namespace App\Controller\Admin;

use App\Entity\Grupo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class GrupoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Grupo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),  // Escondemos el ID en el formulario
            
            AssociationField::new('nivelEducativo', 'Nivel Educativo')
                ->setCrudController(NivelEducativoCrudController::class),   
            TextField::new('nombre', 'Nombre del grupo')
        ];
    }
}
