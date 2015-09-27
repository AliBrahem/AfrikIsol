<?php

namespace BackOffice\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AvancementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date','date')
            ->add('chargePrefaHr')
            ->add('chargePrefaHommes')
            ->add('chargePrevMontaHr')
            ->add('chargePrevMontaHommes')
            ->add('chargeReelleMontaHr')
            ->add('chargeReelleMontaHomme')
            ->add('quantite')
            ->add( 'isolant', 'entity', array(
    'class' => 'BackOffice\AdminBundle\Entity\Tole',
    'property' => 'id',
    'query_builder' => function(\Doctrine\ORM\EntityRepository $er ) {
        return $er->createQueryBuilder('t')
                  ->orderBy('t.quantite', 'ASC')
                  ->where('t.idprojet = ?1')
                 
                  ->setParameter(1,3);
}    
        ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\AdminBundle\Entity\Avancement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_adminbundle_avancement';
    }
}
