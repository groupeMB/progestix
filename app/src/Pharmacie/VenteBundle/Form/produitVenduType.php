<?php

namespace Pharmacie\VenteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class produitVenduType extends AbstractType
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
            ->add('quantite','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('idproduit','entity', array(
                'class' => 'PharmacieStockBundle:Produit',
                'choice_label' => 'libelle'
            )) //'choice', array('choices' => $res))  //new CategorieType())
            ->add('idvente','entity', array(
                'class' => 'PharmacieVenteBundle:Vente',
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
            'data_class' => 'Pharmacie\VenteBundle\Entity\produitVendu'
        ));
    }

    public function getName()
    {

    }
}

