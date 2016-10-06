<?php
namespace Gestion\StockBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
            ->add('quantite')
            ->add('seuilMin')
            ->add('produit')//add('produitTemp', 'choice', array('choices' => $res))
            ->add('Ajouter', 'submit')
            ->add('Annuler', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\StockBundle\Entity\Stock'
        ));
    }
}