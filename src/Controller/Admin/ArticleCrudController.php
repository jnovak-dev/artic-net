<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Články')
            ->setPageTitle(Crud::PAGE_EDIT, 'Článek %entity_short_id%')
            ->setPageTitle(Crud::PAGE_NEW, 'Nový článek')
            ->setSearchFields(['id', 'title'])
            ->setPaginatorPageSize(20)
            ->setDefaultSort(['id' => 'DESC']);
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titulek'),
            TextEditorField::new('text')->hideOnIndex(),
//            SlugField::new('slug')->setTargetFieldName('slug'),
            AssociationField::new('author', 'Autor')->hideOnIndex(),
            AssociationField::new('publishedBy', 'Vydavatel'),
            BooleanField::new('isPublished', 'Publikováno'),
        ];
    }
}
