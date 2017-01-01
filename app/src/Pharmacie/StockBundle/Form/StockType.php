<?php
namespace Pharmacie\StockBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
//use Pharmacie\StockBundle\Form\StockType;

class StockType extends AbstractType
{
    //  private $services;

    // public function __construct($services)
    // {
    //     $this->services = $services;
    // }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // //recuperer la liste des produits
        // $res = $this->services->getAllProduit();

        $builder
            ->add('reference', 'text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caractères',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('libelle','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caractères',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('categorie', 'entity', array(
                'class' => 'PharmacieStockBundle:Categorie',
                'choice_label' => 'libelle'
            ))
            ->add('seuilMin', 'integer', array(
                    'attr' => array(
                    'placeholder' => 'minimum 0',
                    'min' => 1
                )
                ))
            ->add('description','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 10 caractères',
                    'pattern'     => '.{10,}' //minlength
                )
            ))

            ->add('posologie','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 10 caractères',
                    'pattern'     => '.{10,}' //minlength
                )
            ))

            ->add('imageFile', 'file')

            ->add('keywords', CollectionType::class, array(
                'type' => KeywordType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false
            ))

            ->add('champs', CollectionType::class, array(
                'type' => ChampProduitType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false
            ))
            
           // ->add('champ', 'text')
            
            ->add('Valider', 'submit')

            ->add('Annuler', 'submit')
        ;

        /*$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
                print_r($event->getData());
                foreach ($event->getData()['keywords'] as $keyword) {
                    
                }
                
        });*/
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\StockBundle\Entity\Stock'
        ));
    }

    public function getName()
    {
        //return 'pharmacie_stockbundle_stocktype';   
    }
}