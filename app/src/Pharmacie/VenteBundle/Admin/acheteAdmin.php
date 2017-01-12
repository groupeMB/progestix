<?php

namespace Pharmacie\VenteBundle\Admin;

use Pharmacie\VenteBundle\Entity\achete;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class acheteAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('date')
            ->add('montant')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('date')
            ->add('montant')
            ->add('codebarre','entity', array(
                'class' => 'Pharmacie\StockBundle\Entity\Produit',
                'query_builder' => function(EntityRepository $er,achete $achat){

                    return $er->createQueryBuilder()
                        ->from('Pharmacie\StockBundle\Entity\Produit','produit')
                        ->where('produit.id=:id')
                        ->setParameter('id',$achat>getIdproduit());
                }

            ))
            ->add('nom','entity', array(
                'class' => 'Pharmacie\VenteBundle\Entity\client',
                'query_builder' => function(EntityRepository $er,Pharmacie\VenteBundle\Entity\client $client){

                    return $er->createQueryBuilder('sc')
                        ->leftjoin('sc.idclient', 'c')
                        ->where('c.id=:id')
                        ->setParameter('id',$client->getId());
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
            ->with('Achat', array('class' => 'col-md-8'))
                ->add('date')
                ->add('montant')
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
            ->add('date')
            ->add('montant')
        ;
    }
}
