<?php
namespace App\Controller\Admin;

use App\Entity\Espacio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class EspacioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Espacio::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('nombre')->setLabel('Nombre del espacio'),
            AssociationField::new('edificio')->setLabel('Edificio'),
            IntegerField::new('aforo')->setLabel('Aforo máximo'),
        ];

        $recursoField = AssociationField::new('recurso')
            ->setFormTypeOptions([
                'by_reference' => false,
                'multiple' => true
            ])
            ->setLabel('Recursos asociados');


        // Para configurar que te muestre los nombres
        if ($pageName === 'detail') {
            $recursoField->formatValue(function ($value, $entity) {
                // Obtiene los nombres de los recursos y los une con comas
                $nombres = [];
                foreach ($entity->getRecurso() as $recurso) {
                    $nombres[] = (string) $recurso;
                }
                return implode(', ', $nombres);
            });
        }

        $fields[] = $recursoField;

        return $fields;
    }
}
