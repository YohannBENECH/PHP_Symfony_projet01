<?php

namespace App\Form;

use App\Entity\AffectationMatiere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffectationMatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('intervenant_id')
            ->add('matiere_id')
            ->add('duree')
            ->add('intervalle_debut')
            ->add('intervalle_fin');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AffectationMatiere::class,
        ]);
    }
}

