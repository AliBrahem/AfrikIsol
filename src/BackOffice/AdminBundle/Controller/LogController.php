<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\StockType;
use BackOffice\AdminBundle\Entity\Stock;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LogController extends Controller
{
    public function indexAction()
    {
        
       $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
         
        return $this->render('AdminBundle:Log:index.html.twig'
                , array('img' => $images)
                );
    }
    
    public function addStockAction()
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
         $stock = new Stock();
        $form = $this->container->get('form.factory')->create(new StockType(), $stock);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($stock);
                $em->flush();
                return $this->redirect($this->generateUrl("log_listStock"));
            }
        }
         
        return $this->render('AdminBundle:Log:addStock.html.twig' , array('img' => $images,'form' => $form->createView()));
    }
    
    public function listStockAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Stock')->findAll();
       
        return $this->render('AdminBundle:Log:listStock.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
}