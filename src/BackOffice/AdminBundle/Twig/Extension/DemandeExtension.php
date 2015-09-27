<?php

namespace BackOffice\AdminBundle\Twig\Extension;
 use Symfony\Bridge\Doctrine\RegistryInterface; 

class DemandeExtension extends \Twig_Extension
{
    
    protected $doctrine;

        public function __construct(RegistryInterface $doctrine)
        {
            $this->doctrine = $doctrine;
        }
    
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('demande',array($this,'calcul')));
    }
    
    function calcul($i)
    {
        
        $toles = $this->doctrine->getRepository('AdminBundle:Tole')->findBy(array("etat"=>$i));
        
        return count($toles);
    }
 
    public function getName()
    {
        return "dmd_extension";
    }
}