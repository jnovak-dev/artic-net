<?php

namespace App\Controller\Admin;

use App\Entity\Recruitment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RecruitmentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recruitment::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Nábory')
            ->setPageTitle(Crud::PAGE_EDIT, 'Nábor %entity_short_id%')
            ->setPageTitle(Crud::PAGE_NEW, 'Nový nábor')
            ->setSearchFields(['id', 'title'])
            ->setPaginatorPageSize(20)
            ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Název kampaně'),
            TextEditorField::new('text')->hideOnIndex(),
            AssociationField::new('author', 'Autor'), //todo: hideonindex
            DateField::new('dateCreated', 'Datum vytvoření'),
            BooleanField::new('isRunning', 'Probíhá'),
            AssociationField::new('questions', 'Otázky')
        ];
    }

}
