<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nature')
            ->add('lieu')
            ->add('idClient')
            ->add('besoinEchaffaudage')
            ->add('besoinHebergement')
            ->add('nbBesoinHebergement')
            ->add('nbJourPrefa')
            ->add('nbJourMonta')
            ->add('datePrefa','date')
            ->add('dateMonta','date')
            ->add('nbPersPrefa')
            ->add('nbPersMonta')
            ->add('margebenef')
            ->add('Remise')
            ->add('besoinMaterielRoulant')
            ->add('besoinMatierePremiere')
            ->add('coutEPI')
            ->add('quantiteEPI')
            ->add('contact')
            ->add('etat')
            ->add('dateMiseDispo')
            ->add('prixUnitaire')
            ->add('prixTotal')
            ->add('charges')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_projet';
    }
}
