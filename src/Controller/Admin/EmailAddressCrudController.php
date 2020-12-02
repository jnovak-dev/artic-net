<?php

namespace App\Controller\Admin;

use App\Entity\EmailAddress;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EmailAddressCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EmailAddress::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Název'),
            AssociationField::new('access', 'Přístup')->hideOnIndex(),
            ArrayField::new('access', 'Přístup')->onlyOnIndex(),
            DateTimeField::new('dateCreated', 'Datum vytvoření'),
            AssociationField::new('organization', 'Organizace')
        ];
    }
}
