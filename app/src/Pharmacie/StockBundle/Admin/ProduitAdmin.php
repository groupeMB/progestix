<?php

namespace Pharmacie\StockBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProduitAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('codebarre')
            ->add('prixunitaire')
            ->add('dateperemption')
            ->add('libelle')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('codebarre')
            ->add('prixunitaire')
            ->add('dateperemption')

            ->add('libelle','entity', array(
                'class' => 'Pharmacie\StockBundle\Entity\Stock',
                'query_builder' => function(EntityRepository $er,Pharmacie\StockBundle\Entity\Stock $stock){

                    return $er->createQueryBuilder('sc')
                        ->leftjoin('sc.stock', 'c')
                        ->where('c.id=:id')
                        ->setParameter('id',$stock->getId());
                }

            ))

            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Ajout de Produit', array('class' => 'col-md-8'))
                ->add('codebarre')
                ->add('prixunitaire')
                ->add('dateperemption')
            ->end()

            ->with('Types de Stocke', array('class' => 'col-md-4'))
                ->add('libelle', 'sonata_type_model', array(
                    'class' => 'Pharmacie\StockBundle\Entity\Stock',
                    'property' => 'libelle',
                ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('codebarre')
            ->add('prixunitaire')
            ->add('dateperemption')
        ;
    }
}
