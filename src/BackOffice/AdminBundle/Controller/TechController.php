<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\CoudeType;
use BackOffice\AdminBundle\Form\ProjetType;
use BackOffice\AdminBundle\Form\GanttType;
use BackOffice\AdminBundle\Form\AvancementType;
use BackOffice\AdminBundle\Form\ClientType;
use BackOffice\AdminBundle\Entity\Coude;
use BackOffice\AdminBundle\Entity\Projet;
use BackOffice\AdminBundle\Entity\Avancement;
use BackOffice\AdminBundle\Entity\Client;
use BackOffice\AdminBundle\Entity\Gantt;
use BackOffice\AdminBundle\Entity\Tuyauteries;
use BackOffice\AdminBundle\Entity\Reduction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class TechController extends Controller
{
    public function indexAction()
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
        return $this->render('AdminBundle:Technique:GenererTubePDF.html.twig' , array('img' => $images));
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
                $prixUnitaireTole    =   $Request->get('prixUnitaireTole');
                $prixUnitaireIsolant =   $Request->get('prixUnitaireIsolant');
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
                        $modele->setPrixUnitaireTole(0);
                        $modele->setPrixUnitaireIsolant(0);
                        $modele->setPrix(0);
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
        $plan = $em->getRepository('AdminBundle:Gantt')->findAll();
        return $this->render('AdminBundle:Technique:listProjet.html.twig', array('Modeles' => $modeles ,'img' => $images,'plan' => $plan));
    }
    
    public function addClientAction()
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
         $client = new Client();
        $form = $this->container->get('form.factory')->create(new ClientType(), $client);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($client);
                $em->flush();
                return $this->redirect($this->generateUrl("tech_listClient"));
            }
        }
         
        return $this->render('AdminBundle:Technique:addClient.html.twig' , array('img' => $images,'form' => $form->createView()));
    }
    
    public function listerClientAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Client')->findAll();
        
        return $this->render('AdminBundle:Technique:listClient.html.twig', array('Modeles' => $modeles ,'img' => $images));
    }
    
    public function addGanttAction($id)
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
         
        
        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
         
            if ( $Request->get('titem1')!="" && $Request->get('dated1')!="" && $Request->get('datef1')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem1'));
                $plan->setDateDebut(new \DateTime($Request->get('dated1')));
                $plan->setDateFin(new \DateTime($Request->get('datef1')));
                $em->persist($plan);
                $em->flush();
               
            }
            if ( $Request->get('titem2')!="" && $Request->get('dated2')!="" && $Request->get('datef2')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem2'));
                $plan->setDateDebut(new \DateTime($Request->get('dated2')));
                $plan->setDateFin(new \DateTime($Request->get('datef2')));
                $em->persist($plan);
                $em->flush();
             
            }
            
            if ( $Request->get('titem3')!="" && $Request->get('dated3')!="" && $Request->get('datef3')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem3'));
                $plan->setDateDebut(new \DateTime($Request->get('dated3')));
                $plan->setDateFin(new \DateTime($Request->get('datef3')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem4')!="" && $Request->get('dated4')!="" && $Request->get('datef4')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem4'));
                $plan->setDateDebut(new \DateTime($Request->get('dated4')));
                $plan->setDateFin(new \DateTime($Request->get('datef4')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem5')!="" && $Request->get('dated5')!="" && $Request->get('datef5')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem5'));
                $plan->setDateDebut(new \DateTime($Request->get('dated5')));
                $plan->setDateFin(new \DateTime($Request->get('datef5')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem6')!="" && $Request->get('dated6')!="" && $Request->get('datef6')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem6'));
                $plan->setDateDebut(new \DateTime($Request->get('dated6')));
                $plan->setDateFin(new \DateTime($Request->get('datef6')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem7')!="" && $Request->get('dated7')!="" && $Request->get('datef7')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem7'));
                $plan->setDateDebut(new \DateTime($Request->get('dated7')));
                $plan->setDateFin(new \DateTime($Request->get('datef7')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem8')!="" && $Request->get('dated8')!="" && $Request->get('datef8')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem8'));
                $plan->setDateDebut(new \DateTime($Request->get('dated8')));
                $plan->setDateFin(new \DateTime($Request->get('datef8')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem9')!="" && $Request->get('dated9')!="" && $Request->get('datef9')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem9'));
                $plan->setDateDebut(new \DateTime($Request->get('dated9')));
                $plan->setDateFin(new \DateTime($Request->get('datef9')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem10')!="" && $Request->get('dated10')!="" && $Request->get('datef10')!="") {
                $plan = new Gantt();
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $plan->setItem($Request->get('titem10'));
                $plan->setDateDebut(new \DateTime($Request->get('dated10')));
                $plan->setDateFin(new \DateTime($Request->get('datef10')));
                $em->persist($plan);
                $em->flush();
             
            }
            
             return $this->redirect($this->generateUrl("admin_gantt",array('id'=>$id)));
        }
         
        return $this->render('AdminBundle:Technique:addPlan.html.twig' , array('img' => $images,'id'=>$id));
    }
    
    public function addAvancementAction($id)
    {   
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
        
         $plan = new Avancement();
        $form = $this->container->get('form.factory')->create(new AvancementType(), $plan);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $plan->setIdprojet($id);
                $em->persist($plan);
                $em->flush();
                return $this->redirect($this->generateUrl("admin_grapheSuivie",array('id'=>$id)));
            }
        }
         
        return $this->render('AdminBundle:Technique:addAvancement.html.twig' , array('img' => $images,'form' => $form->createView(),"id"=>$id));
    }
    
    public function findTUYAction($epaisseur){
        // Chart
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
   
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modele = $em->getRepository('AdminBundle:Tuyauteries')->findBy(array("epaisseur"=>$epaisseur));
        $response = new JsonResponse();
        
        return $response->setData(array('tuy'=>$modele[2]->getDiametreinter()));
        //echo ''.$modele->getPreavis();
     }
}

