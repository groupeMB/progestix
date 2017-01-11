<?php

namespace Pharmacie\StockBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class StockAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('quantite')
            ->add('seuilmin')
            ->add('description')
            ->add('posologie')
            ->add('libelle')
            ->add('reference')
            ->add('imageName')
            ->add('updatedAt')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('quantite')
            ->add('seuilmin')
            ->add('description')
            ->add('posologie')
            ->add('libelle')
            ->add('reference')
            ->add('imageName')
            ->add('updatedAt')
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
            ->with('Ajout de Stocke', array('class' => 'col-md-8'))
                ->add('quantite')
                ->add('seuilmin')
                ->add('description')
                ->add('posologie')
                ->add('libelle')
                ->add('reference')
                ->add('imageName')
                ->add('updatedAt')
            ->end()

            ->with('Types Catégories de Stock', array('class' => 'col-md-4'))
                ->add('categorie', 'sonata_type_model', array(
                    'class' => 'Pharmacie\StockBundle\Entity\Categorie',
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
            ->add('quantite')
            ->add('seuilmin')
            ->add('description')
            ->add('posologie')
            ->add('libelle')
            ->add('reference')
            ->add('imageName')
            ->add('updatedAt')
        ;
    }
}
