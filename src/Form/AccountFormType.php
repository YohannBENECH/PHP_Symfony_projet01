<?php

namespace App\Form;

use App\Entity\Account;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('account_login', TextType::class )
            ->add('account_password', TextType::class)
            ->add('account_type', ChoiceType::class,[
                'choices' => [
                    'intervenant' => 'intervenant',
                    'secretaire' => 'secretaire',
                ],
            ])
            ->add('account_firstname', TextType::class)
            ->add('account_nam', TextType::class)
            ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
