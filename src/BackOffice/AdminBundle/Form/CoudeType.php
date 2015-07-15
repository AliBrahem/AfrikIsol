<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoudeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('diametreinter')
            ->add('dnext')
            ->add('epaisseur', 'collection',
                    array('label' => 'Epaisseur', 'type' => 'choice', 'options' =>
                            array( 'choices' => array('ROLE_TECHNIQUE' => 'Service Technique') ) ))    
            ->add('dnisole')
            ->add('circ')
            ->add('recouv')
            ->add('largeurtole')
            ->add('qtenet')
            ->add('dechet')
            ->add('qtebrute')
            ->add('tempsprefa')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Coude'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_coude';
    }
}
