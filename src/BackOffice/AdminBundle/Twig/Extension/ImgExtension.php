<?php

namespace BackOffice\AdminBundle\Twig\Extension;
 

class ImgExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('image',array($this,'afficheImg')));
    }
    
    function afficheImg($usr)
    {
         $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
         return $images;
    }
 
    public function getName()
    {
        return "img_extension";
    }
}