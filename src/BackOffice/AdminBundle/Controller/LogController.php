<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\StockType;
use BackOffice\AdminBundle\Form\MouvementType;
use BackOffice\AdminBundle\Entity\Mouvement;
use BackOffice\AdminBundle\Entity\Stock;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LogController extends Controller
{
    public function indexAction()
    {
        

        return $this->render('AdminBundle:Log:index.html.twig');
    }
    
    public function addStockAction()
    {   
              
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
         
        return $this->render('AdminBundle:Log:addStock.html.twig' , array('form' => $form->createView()));
    }
    
     public function addMvtAction($id)
    {   
     
         $mvt = new Mouvement();
        $form = $this->container->get('form.factory')->create(new MouvementType(), $mvt);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $modele = $em->getRepository('AdminBundle:Stock')->find($id);
                $modele->setQteStock($mvt->getQtedispo());
                $em->persist($modele);
                $mvt->setIdstock($modele);
                $em->persist($mvt);
                $em->flush();
                return $this->redirect($this->generateUrl("log_listMvt"));
            }
        }
         
        return $this->render('AdminBundle:Log:addMvt.html.twig' , array('form' => $form->createView()));
    }
    
    public function listStockAction()
    {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Stock')->findAll();
       
        return $this->render('AdminBundle:Log:listStock.html.twig', array('Modeles' => $modeles));
    }
    
    public function listMvtAction($idstock)
    {
       
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Mouvement')->findBy(array('idstock' => $idstock));
       
        return $this->render('AdminBundle:Log:listMvt.html.twig', array('Modeles' => $modeles));
    }
    public function listAllMvtAction()
    {
       
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Mouvement')->findAll();
       
        return $this->render('AdminBundle:Log:listMvt.html.twig', array('Modeles' => $modeles));
    }
    
    public function listDmdAction()
    {
       
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Tole')->findBy(array("etat"=>0));
        $stock = $em->getRepository('AdminBundle:Stock')->findBy(array("designation"=>"isolant"));
        $quantite = $stock[0]->getQteStock();
        return $this->render('AdminBundle:Log:listDmd.html.twig', array('Modeles' => $modeles,'quantite'=>$quantite));
    }
    
     public function updateDmdAction($id,$q){

        $em = $this->container->get('doctrine')->getEntityManager();
        $modele = $em->getRepository('AdminBundle:Tole')->find($id);
        $stock = $em->getRepository('AdminBundle:Stock')->findBy(array("designation"=>"isolant"));
        $response = new JsonResponse();
       
        $modele->setEtat(1);
         $em->persist($modele);
         $em->flush();
        $stock[0]->setQteStock($q);
        $em->persist($stock[0]);
        $em->flush();        
         $html = $this->renderView('AdminBundle:Log:AfficheTole.html.twig', array('Modele' => $modele)
          
        );
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="MatierePremiere.pdf"'
                )
        );
        return $response->setData(array('quantite'=>$q));
        //echo ''.$modele->getPreavis();
     }
    
}