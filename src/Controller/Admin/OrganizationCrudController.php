<?php

namespace App\Controller\Admin;

use App\Entity\Organization;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrganizationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Organization::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Organizace')
            ->setPageTitle(Crud::PAGE_EDIT, 'Organizace %entity_short_id%')
            ->setPageTitle(Crud::PAGE_NEW, 'Nová organizace')
            ->setSearchFields(['id', 'name'])
            ->setPaginatorPageSize(20)
            ->setDefaultSort(['id' => 'DESC']);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Název'),
            AssociationField::new('access', 'Přístup')->hideOnIndex(),
        ];
    }
}
