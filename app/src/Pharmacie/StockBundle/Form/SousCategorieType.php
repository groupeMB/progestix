<?php

namespace Pharmacie\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SousCategorieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'libelle',
                'text', 
                array(
                    'attr' => array(
                    'placeholder' => 'minimum 2 caractères',
                    'pattern'     => '.{2,}' 
                    )
                )
            )
            ->add('description',
                'text', 
                array(
                    'attr' => array(
                    'placeholder' => 'minimum 10 caractères',
                    'pattern'     => '.{10,}' 
                    )
                ))
            ->add('categorie')
            ->add('Valider', 'submit')
            ->add('Annuler','reset')
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\StockBundle\Entity\SousCategorie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pharmacie_stockbundle_souscategorie';
    }


}
