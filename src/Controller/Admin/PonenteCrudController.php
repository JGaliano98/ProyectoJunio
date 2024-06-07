<?php
// src/Controller/Admin/PonenteCrudController.php

namespace App\Controller\Admin;

use App\Entity\Ponente;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PonenteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ponente::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nombre'),
            TextField::new('cargo'),
            ImageField::new('URL')
                ->setBasePath('/images/ponentes')
                ->onlyOnIndex(),
            Field::new('imagenFile')
                ->setFormType(VichImageType::class)
                ->setLabel('Foto del ponente')
                ->onlyOnForms(),
        ];
    }
}
