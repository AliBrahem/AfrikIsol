<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanificationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('preavis')
            ->add('avisKickoff','date')
            ->add('retraitTole')
            ->add('retraitPlan')
            ->add('debutInstallation')
            ->add('debutPrefa')
            ->add('debutMonta')
            ->add('livraisonCommandePrefa')
            ->add('debutMontagePremierGroupe')
            ->add('debutMontageDeuxiemeGroupe')
            ->add('debutDemobilisation')
            ->add('finDemobilisation')
            ->add('dateFin','date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Planification'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_planification';
    }
}
