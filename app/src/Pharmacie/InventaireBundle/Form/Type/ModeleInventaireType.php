<?php

namespace Pharmacie\InventaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModeleInventaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('libelle')
        	->add('description', 'textarea')
        	->add('enregistrer', 'submit')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\InventaireBundle\Entity\ModeleInventaire'
        ));
    }
    
   

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pharmacie_inventairebundle_modeleinventaire';
    }


}
