<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\CoudeType;
use BackOffice\AdminBundle\Form\ProjetType;
use BackOffice\AdminBundle\Entity\Coude;
use BackOffice\AdminBundle\Entity\Projet;
use BackOffice\AdminBundle\Entity\Tuyauteries;
use BackOffice\AdminBundle\Entity\Reduction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;


class TechController extends Controller
{
    public function indexAction()
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
        return $this->render('AdminBundle:Default:index.html.twig' , array('img' => $images));
    }
    public function listerTUYAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Tuyauteries')->findAll();
        
        return $this->render('AdminBundle:Technique:listerTUY.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
    public function listerCOUDEAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Coude')->findAll();
        
        return $this->render('AdminBundle:Technique:listerCOUDE.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
    public function listerREDAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Reduction')->findAll();
        
        return $this->render('AdminBundle:Technique:listerRED.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
    
    public function calculToleAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
        
        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
           
                $tole           =   $Request->get('tole'); 
                $diametreinter  =   $Request->get('diametreinter');
                $epaisseur      =   $Request->get('epaisseur');
                $dnext          =   $Request->get('dnext');
                $dnisole        =   $Request->get('dnisole');
                $circ           =   $Request->get('circ');
                $recouv         =   $Request->get('recouv');
                $largeurtole    =   $Request->get('largeurtole');
                $qtenet         =   $Request->get('qtenet');
                $dechet         =   $Request->get('dechet');
                $qtebrute       =   $Request->get('qtebrute');
                $tempsprefa     =   $Request->get('tempsprefa');
                $tempsmonta     =   $Request->get('tempsmonta');
                $prixunitairetole    =   $Request->get('prixUnitaireTole');
                $prixunitaireisolant =   $Request->get('prixUnitaireIsolant');
                $prix           =   $Request->get('prix');
                
                if($tole == "TUYAUTERIES")
                {        
                        $modele = new Tuyauteries();
                        $modele->setDiametreinter($diametreinter);
                        $modele->setDnext($dnext);
                        $modele->setEpaisseur($epaisseur);
                        $modele->setDnisole($dnisole);
                        $modele->setCirc($circ);
                        $modele->setRecouv($recouv);
                        $modele->setLargeurtole($largeurtole);
                        $modele->setQuantite($qtenet);
                        $modele->setDechet($dechet);
                        $modele->setQtebrute($qtebrute);
                        $modele->setTempsprefa($tempsprefa);
                        $modele->setTempsMonta($tempsmonta);
                        $modele->setPrixUnitaireTole($prixUnitaireTole);
                        $modele->setPrixUnitaireIsolant($prixUnitaireIsolant);
                        $modele->setPrix($prix);
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($modele);
                        $em->flush();
                        return $this->redirect($this->generateUrl("tech_listerTUYAUTERIES"));
                }        
                if($tole == "COUDE")
                {        
                        $modele = new Coude();
                        $modele->setDiametreinter($diametreinter);
                        $modele->setDnext($dnext);
                        $modele->setEpaisseur($epaisseur);
                        $modele->setDnisole($dnisole);
                        $modele->setCirc($circ);
                        $modele->setRecouv($recouv);
                        $modele->setLargeurtole($largeurtole);
                        $modele->setQtenet($qtenet);
                        $modele->setDechet($dechet);
                        $modele->setQtebrute($qtebrute);
                        $modele->setTempsprefa($tempsprefa);
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($modele);
                        $em->flush();
                        return $this->redirect($this->generateUrl("tech_listerCOUDE"));
                }
                if($tole == "REDUCTION")
                {        
                        $modele = new Reduction();
                        $modele->setDiametreinter($diametreinter);
                        $modele->setDnext($dnext);
                        $modele->setEpaisseur($epaisseur);
                        $modele->setDnisole($dnisole);
                        $modele->setCirc($circ);
                        $modele->setRecouv($recouv);
                        $modele->setLargeurtole($largeurtole);
                        $modele->setQtenet($qtenet);
                        $modele->setDechet($dechet);
                        $modele->setQtebrute($qtebrute);
                        $modele->setTempsprefa($tempsprefa);
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($modele);
                        $em->flush();
                        return $this->redirect($this->generateUrl("tech_listerREDUCTION"));
                }
                //return $this->redirect($this->generateUrl("tech_listerTUYAUTERIES"));
            
        }


        return $this->render('AdminBundle:Technique:calculTole.html.twig' , array('img' => $images)
              //  , array('form' => $form->createView())
                );
        
        
    }
    
    public function generatePdfTubeAction() {
        
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Coude')->findAll();
        
        $html = $this->renderView('AdminBundle:Technique:GenererTubePDF.html.twig', array('Modeles' => $modeles ,'img' => $images)
          
        );
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Liste_Des_Tubes.pdf"'
                )
        );
    }
    
    public function addProjetAction()
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
         $projet = new Projet();
        $form = $this->container->get('form.factory')->create(new ProjetType(), $projet);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($projet);
                $em->flush();
                return $this->redirect($this->generateUrl("tech_listProjet"));
            }
        }
         
        return $this->render('AdminBundle:Technique:addProjet.html.twig' , array('img' => $images,'form' => $form->createView()));
    }
    
    public function listerProjetAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        
        return $this->render('AdminBundle:Technique:listProjet.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
}

