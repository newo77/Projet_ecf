<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    //public function configureFields(string $pageName): iterable
    //{
      //  return [
      //      IdField::new('id'),
       //     TextField::new('name'),
      //      BooleanField::new('name'),
      //      TextEditorField::new('description'),
       // ];
   // }

}
