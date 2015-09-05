<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MADType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
            ->add('designation')
            ->add('date','date')
            ->add('dnext')
            ->add('longueur')
            ->add('coude90')
            ->add('coude45')
            ->add('reduction')
            ->add('te')
            ->add('brides')
            ->add('vannes')
            ->add('epaisseur')
            ->add('couche1')
            ->add('couche2')
            ->add('couche3')
            ->add('quantite')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\MAD'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_mad';
    }
}
