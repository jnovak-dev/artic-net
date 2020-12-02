<?php

namespace App\Controller\Admin;

use App\Entity\EmailMessage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EmailMessageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EmailMessage::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('sender', 'Odesílatel'),
            AssociationField::new('recipient', 'Adresát'), //todo: fixnout, aby se zobrazovalo i ve formech
//            ArrayField::new('recipient', 'Adresát')->hideOnForm(),
            TextField::new('subject', 'Předmět'),
            TextEditorField::new('text')->hideOnIndex(),
            DateTimeField::new('dateSent', 'Datum odeslání')->hideOnForm(),
            BooleanField::new('isDeletedBySender', 'Smazáno odesílatelem')->hideOnForm()->hideOnIndex(),
            BooleanField::new('isDeletedByRecipient', 'Smazáno adresátem')->hideOnForm()->hideOnIndex(), //todo: asi bych se na to vysral
            DateTimeField::new('dateSeen', 'Datum zobrazení')->hideOnForm()->hideOnIndex(),
            BooleanField::new('isSeen', 'Zobrazeno')->hideOnForm()->renderAsSwitch(false)
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
