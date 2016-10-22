<?php

namespace Pharmacie\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    // private $services;

    // public function __construct($services)
    // {
    //     $this->services = $services;
    // }

    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // //recuperer la liste des categories

        //     $res = $this->services->getAllCategorie();

        $builder
            ->add('libelle','entity', array(
                'class' => 'PharmacieStockBundle:Stock',
                'choice_label' => 'libelle'
            ))
            ->add('codebarre','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('prixunitaire','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('dateperemption', DateType::class, array(
                'widget' => 'choice',
                'years' => range(date('Y')+1, date('Y')+10)
                ))
 

            ->add('Valider', 'submit')
            ->add('Annuler', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\StockBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        
    }
}

