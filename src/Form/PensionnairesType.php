<?php

namespace App\Form;

use App\Entity\Pensionnaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PensionnairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_pensionnaire')
            ->add('type_pensionnaire')
            ->add('date_de_naissance_pensionnaire')
            ->add('image_pensionnaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pensionnaires::class,
        ]);
    }
}
