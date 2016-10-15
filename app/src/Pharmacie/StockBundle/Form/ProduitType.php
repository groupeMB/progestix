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
            ->add('libelle','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
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
                'widget' => 'choice'))
            ->add('reference','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('categorie','entity', array(
                'class' => 'PharmacieStockBundle:Categorie',
                'choice_label' => 'libelle'
            )) //'choice', array('choices' => $res))  //new CategorieType())
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

