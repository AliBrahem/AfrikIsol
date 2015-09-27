<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ToleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('diametreinter')
            ->add('pouce')
            ->add('dnext')
            ->add('epaisseur')
            ->add('dnisole')
            ->add('circ')
            ->add('recouv')
            ->add('quantite')
            ->add('dechet')
            ->add('qtebrute')
            ->add('qtenet')
            ->add('prixUnitaireTole')
            ->add('prixUnitaireIsolantMm')
            ->add('prixUnitaireIsolantML')
            ->add('prix')
            ->add('prixMO')
            ->add('accessoires')
            ->add('echaffaudage')
            ->add('tempsprefa')
            ->add('tempsMonta')
            ->add('tempsPrefaMonta')
            ->add('type')
            ->add('unite')
            ->add('nbCouche')
            ->add('idprojet')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Tole'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_tole';
    }
}
