<?php

namespace Pharmacie\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChampProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caractères',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('valeur', 'text', array(
                'attr' => array(
                    'placeholder' => 'minimum 1 caractères',
                    'pattern'     => '.{1,}' //minlength
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\StockBundle\Entity\ChampProduit'
        ));
    }

    public function getName(){
        //return 'pharmacie_stockbundle_champproduittype'; 
    }
}
