<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    //Rendus dashboard de l'onglet Cour

    public function configureFields(string $pageName): iterable
    {
     return [
         TextField::new('nom'),
         SlugField::new('slug')->setTargetFieldName('nom'),
         ImageField::new('illustration')
             ->setBasePath('uploads')
             ->setUploadDir('public/uploads')
             ->setUploadedFileNamePattern('[name].[extension]')
         ->setRequired(false),
         TextField::new('subtitle'),
         TextareaField::new('description'),
         TextField::new('chapitre'),
         AssociationField::new('category')

         ];
    }
}
