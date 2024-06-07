<?php
// src/Controller/Admin/EventoCrudController.php
namespace App\Controller\Admin;

use App\Entity\Evento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EventoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Evento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('titulo'),
            DateField::new('fecha_inicio'),
            DateField::new('fecha_fin'),
            ImageField::new('ImagenURL')
                ->setBasePath('/images')
                ->onlyOnIndex(),
            Field::new('imagenFile')
                ->setFormType(VichImageType::class)
                ->setLabel('Imagen del evento')
                ->onlyOnForms(),
        ];
    }
}
