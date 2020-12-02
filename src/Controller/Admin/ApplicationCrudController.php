<?php

namespace App\Controller\Admin;

use App\Entity\Application;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ApplicationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Application::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Přihlášky')
            ->setPageTitle(Crud::PAGE_EDIT, 'Přihláška %entity_short_id%')
            ->setPageTitle(Crud::PAGE_NEW, 'Nová přihláška')
            ->setSearchFields(['id'])
            ->setPaginatorPageSize(20)
            ->setDefaultSort(['id' => 'DESC']);
    }


//    public function configureFields(string $pageName): iterable
//    {
////        return [
////            TextField::new('title'),
////            //todo: dodělat
////        ];
//    }

}
