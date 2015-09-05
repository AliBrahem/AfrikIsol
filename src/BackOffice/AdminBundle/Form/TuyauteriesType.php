<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TuyauteriesType extends AbstractType
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
            ->add('epaisseur')
            ->add('dnisole')
            ->add('circ')
            ->add('recouv')
            ->add('largeurtole')
            ->add('quantite')
            ->add('dechet')
            ->add('qtebrute')
            ->add('tempsprefa')
            ->add('tempsMonta')
            ->add('prixUnitaireTole')
            ->add('prixUnitaireIsolant')
            ->add('prix')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Tuyauteries'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_tuyauteries';
    }
}
