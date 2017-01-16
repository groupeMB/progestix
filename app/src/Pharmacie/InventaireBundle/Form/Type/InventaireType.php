<?php

namespace Pharmacie\InventaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class InventaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateInventaire', DateType::class, array(
                'widget' => 'choice',
                'years' => range(date('Y')+1, date('Y')+10)
                ))
            ->add('dateDebut', DateType::class, array(
                'widget' => 'choice',
                'years' => range(date('Y')+1, date('Y')+10)
                ))
            ->add('dateFin', DateType::class, array(
                'widget' => 'choice',
                'years' => range(date('Y')+1, date('Y')+10)
                ))
            //->add('rapport')
            ->add('modele_id', 'entity', array(
                    'class' => 'PharmacieInventaireBundle:ModeleInventaire',
                    'property' => 'libelle',
                ))
            ->add('Valider', 'submit')
            ->add('Annuler', 'submit');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pharmacie\InventaireBundle\Entity\Inventaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pharmacie_inventairebundle_inventaire';
    }


}
