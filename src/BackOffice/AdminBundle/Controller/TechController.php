<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\ProjetType;
use BackOffice\AdminBundle\Form\AvancementType;
use BackOffice\AdminBundle\Entity\Planification;
use BackOffice\AdminBundle\Entity\Tole;
use BackOffice\AdminBundle\Entity\MAD;
use BackOffice\AdminBundle\Form\PlanificationType;
use BackOffice\AdminBundle\Form\MADType;
use BackOffice\AdminBundle\Form\ToleType;
use BackOffice\AdminBundle\Form\ClientType;
use BackOffice\AdminBundle\Entity\Projet;
use BackOffice\AdminBundle\Entity\Avancement;
use BackOffice\AdminBundle\Entity\Client;
use BackOffice\AdminBundle\Entity\Gantt;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TechController extends Controller
{
    public function indexAction()
    {   
        
        return $this->render('AdminBundle:Technique:indexTech.html.twig');
    }
    public function listerToleaction($id)
    {
       
        $em = $this->container->get('doctrine')->getEntityManager();
        $toles = $em->getRepository('AdminBundle:Tole')->findBy(array("idprojet"=>$id));
        
        return $this->render('AdminBundle:Technique:listerTole.html.twig', array('tole' => $toles));
    }
    
   
    
    public function calculToleAction($id)
    {

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
           
                $tole           =   $Request->get('tole'); 
                $diametreinter  =   $Request->get('diametreinter');
                $epaisseur      =   $Request->get('epaisseur');
                $dnext          =   $Request->get('dnext');
                $pouce          =   $Request->get('pouce');
                $dnisole        =   $Request->get('dnisole');
                $circ           =   $Request->get('circ');
                $recouv         =   $Request->get('recouv');
                $nbcouche    =   $Request->get('nbcouche');
                $unite    =   $Request->get('unite');
                $qtenet         =   $Request->get('qtenet');
                $dechet         =   $Request->get('dechet');
                $qtebrute       =   $Request->get('qtebrute');
                $tempsprefa     =   $Request->get('tempsprefa');
                $tempsmonta     =   $Request->get('tempsmonta');
                $prefamonta     =   $Request->get('prefamonta');
                $prixUnitaireTole    =   $Request->get('prixUnitaireTole');
                $prixUnitaireIsolantMm =   $Request->get('prixUnitaireIsolantMm');
                $prixUnitaireIsolantML =   $Request->get('prixUnitaireIsolantML');
                $quantite           =   $Request->get('quantite');
                $prix           =   $Request->get('prix');
                $prixMO           =   $Request->get('prixMO');
                $accessoire           =   $Request->get('accessoire');
                $echaff           =   $Request->get('echaffaudage');
                      
                        $modele = new Tole();
                        $modele->setType($tole);
                        $modele->setDiametreinter($diametreinter);
                        $modele->setDnext($dnext);
                        $modele->setEpaisseur($epaisseur);
                        $modele->setDnisole($dnisole);
                        $modele->setCirc($circ);
                        $modele->setRecouv($recouv);
                        $modele->setPouce($pouce);
                        $modele->setNbCouche($nbcouche);
                        $modele->setUnite($unite);
                        $modele->setEchaffaudage($echaff);
                        $modele->setAccessoires($accessoire);
                        $modele->setPrixMO($prixMO);
                        $modele->setQuantite($quantite);
                        $modele->setDechet($dechet);
                        $modele->setQtebrute($qtebrute);
                        $modele->setTempsprefa($tempsprefa);
                        $modele->setTempsMonta($tempsmonta);
                        $modele->setTempsPrefaMonta($prefamonta);
                        $modele->setPrixUnitaireTole($prixUnitaireTole);
                        $modele->setPrixUnitaireIsolantMm($prixUnitaireIsolantMm);
                        $modele->setPrixUnitaireIsolantML($prixUnitaireIsolantML);
                        $modele->setQtenet($qtenet);
                        $modele->setPrix($prix);
                        $modele->setEtat("En attente");
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $projet = $em->getRepository('AdminBundle:Projet')->find($id);
                        $modele->setIdprojet($projet);
                        
                        $em->persist($modele);
                        $em->flush();

                        return $this->redirect($this->generateUrl("tech_listerTole", array('id' =>$id)));
      
        }


        return $this->render('AdminBundle:Technique:calculTole.html.twig' , array('id'=>$id)
              //  , array('form' => $form->createView())
                );
        
        
    }
    
    public function generatePdfTubeAction() {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Coude')->findAll();
        
        $html = $this->renderView('AdminBundle:Technique:GenererTubePDF.html.twig', array('Modeles' => $modeles)
          
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
         
        return $this->render('AdminBundle:Technique:addProjet.html.twig' , array('form' => $form->createView()));
    }
    
    public function listerProjetAction()
    {
  
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        $plan = $em->getRepository('AdminBundle:Gantt')->findAll();
        return $this->render('AdminBundle:Technique:listProjet.html.twig', array('Modeles' => $modeles ,'plan' => $plan));
    }
    
    public function listerAvancementAction()
    {
       
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        //$query = $em->createQuery("SELECT p FROM AdminBundle:Projet p Join AdminBundle:Avancement i where p.id = i.idprojet");
        //$modeles = $query->getResult();
             return $this->render('AdminBundle:Technique:listAvancement.html.twig', array('Modeles' => $modeles));
    }
     public function listerPlanificationAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        //$modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        $query = $em->createQuery("SELECT p FROM AdminBundle:Projet p Join AdminBundle:Planification i where p.id = i.idprojet");
        $modeles = $query->getResult();
             return $this->render('AdminBundle:Technique:listPlan.html.twig', array('Modeles' => $modeles));
    }
    public function listerGanttAction()
    {
 
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
       
       return $this->render('AdminBundle:Technique:listGantt.html.twig', array('Modeles' => $modeles));
    }
    public function listerMADAction()
    {
     
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        
       return $this->render('AdminBundle:Technique:listMAD.html.twig', array('Modeles' => $modeles));
    }
    
    public function listToleAction()
    {

        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Projet')->findAll();
        return $this->render('AdminBundle:Technique:listTole.html.twig', array('Modeles' => $modeles));
    }
    
    
    public function addClientAction()
    {   
      
         $client = new Client();
        $form = $this->container->get('form.factory')->create(new ClientType(), $client);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                
                $em = $this->container->get('doctrine')->getEntityManager();
                
                $src = $Request->files->get('photo');

                $stream = fopen($src, 'rb');
                
                $client->setImage(stream_get_contents($stream));
                $em->persist($client);
                $em->flush();
                return $this->redirect($this->generateUrl("tech_listClient"));
            }
        }
         
        return $this->render('AdminBundle:Technique:addClient.html.twig' , array('form' => $form->createView()));
    }
    
    public function listerClientAction()
    {
   
        $em = $this->container->get('doctrine')->getEntityManager();
        $modeles = $em->getRepository('AdminBundle:Client')->findAll();
        
        $m = array();
        $m = $modeles;
        $logos = array();
        for ($i = 0; $i < count($m); $i++) {
            $logos[$i] = base64_encode(stream_get_contents($m[$i]->getImage()));
        }
        
        return $this->render('AdminBundle:Technique:listClient.html.twig', array('logos' => $logos ,'Modeles' => $modeles));
    }
    
    public function addGanttAction($id)
    {   

        $Request = $this->getRequest();
        $em = $this->container->get('doctrine')->getEntityManager();
        $modele = $em->getRepository('AdminBundle:Projet')->find($id);

        if ($Request->getMethod() == 'POST') {
         
            if ( $Request->get('titem1')!="" && $Request->get('dated1')!="" && $Request->get('datef1')!="") {
                $plan = new Gantt();
                
                
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem1'));
                $plan->setDateDebut(new \DateTime($Request->get('dated1')));
                $plan->setDateFin(new \DateTime($Request->get('datef1')));
                $em->persist($plan);
                $em->flush();
               
            }
            if ( $Request->get('titem2')!="" && $Request->get('dated2')!="" && $Request->get('datef2')!="") {
                $plan = new Gantt();
                 $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem2'));
                $plan->setDateDebut(new \DateTime($Request->get('dated2')));
                $plan->setDateFin(new \DateTime($Request->get('datef2')));
                $em->persist($plan);
                $em->flush();
             
            }
            
            if ( $Request->get('titem3')!="" && $Request->get('dated3')!="" && $Request->get('datef3')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem3'));
                $plan->setDateDebut(new \DateTime($Request->get('dated3')));
                $plan->setDateFin(new \DateTime($Request->get('datef3')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem4')!="" && $Request->get('dated4')!="" && $Request->get('datef4')!="") {
                $plan = new Gantt();
                 $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem4'));
                $plan->setDateDebut(new \DateTime($Request->get('dated4')));
                $plan->setDateFin(new \DateTime($Request->get('datef4')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem5')!="" && $Request->get('dated5')!="" && $Request->get('datef5')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem5'));
                $plan->setDateDebut(new \DateTime($Request->get('dated5')));
                $plan->setDateFin(new \DateTime($Request->get('datef5')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem6')!="" && $Request->get('dated6')!="" && $Request->get('datef6')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem6'));
                $plan->setDateDebut(new \DateTime($Request->get('dated6')));
                $plan->setDateFin(new \DateTime($Request->get('datef6')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem7')!="" && $Request->get('dated7')!="" && $Request->get('datef7')!="") {
                $plan = new Gantt();
               $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem7'));
                $plan->setDateDebut(new \DateTime($Request->get('dated7')));
                $plan->setDateFin(new \DateTime($Request->get('datef7')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem8')!="" && $Request->get('dated8')!="" && $Request->get('datef8')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem8'));
                $plan->setDateDebut(new \DateTime($Request->get('dated8')));
                $plan->setDateFin(new \DateTime($Request->get('datef8')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem9')!="" && $Request->get('dated9')!="" && $Request->get('datef9')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem9'));
                $plan->setDateDebut(new \DateTime($Request->get('dated9')));
                $plan->setDateFin(new \DateTime($Request->get('datef9')));
                $em->persist($plan);
                $em->flush();
             
            }
            if ( $Request->get('titem10')!="" && $Request->get('dated10')!="" && $Request->get('datef10')!="") {
                $plan = new Gantt();
                $plan->setIdprojet($modele);
                $plan->setItem($Request->get('titem10'));
                $plan->setDateDebut(new \DateTime($Request->get('dated10')));
                $plan->setDateFin(new \DateTime($Request->get('datef10')));
                $em->persist($plan);
                $em->flush();
             
            }
            
             return $this->redirect($this->generateUrl("admin_gantt",array('id'=>$id)));
        }
         
        return $this->render('AdminBundle:Technique:addGantt.html.twig' , array('id'=>$id));
    }
    
    public function addAvancementAction($id)
    {   

         $plan = new Avancement();

         $form = $this->createFormBuilder($plan)

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
    'query_builder' => function(\Doctrine\ORM\EntityRepository $er ) use ( $id ) {
        return $er->createQueryBuilder('t')
                  ->orderBy('t.quantite', 'ASC')
                  ->where('t.idprojet = ?1')
                  ->Andwhere('t.quantite>0')
                  ->Andwhere('t.etat = 1')
                  ->setParameter(1,$id);
                                                                     }    
        ))
            ->getForm();
         
        
        $request = $this->getRequest();
        //verifie si le formulaire est submitter puis il récupère les données de la requête si la requête est porteuxe des données 
        
        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') {
           if ($form->handleRequest($request)->isValid()) {
            $plan = $form->getData();
        
                $em = $this->container->get('doctrine')->getEntityManager();
                $tole = $plan->getIsolant();
                $tole->setQuantite($tole->getQuantite()-$plan->getQuantite());
                $modele = $em->getRepository('AdminBundle:Projet')->find($id);
                $plan->setIdprojet($modele);
                $em->persist($plan);
                $em->flush();
                $em->persist($tole);
                $em->flush();
                return $this->redirect($this->generateUrl("admin_grapheSuivie",array('id'=>$id)));
            }
        }
         
        return $this->render('AdminBundle:Technique:addAvancement.html.twig' , array('form' => $form->createView(),"id"=>$id));
    }
    
    public function addPlanAction($id)
    {   

         $plan = new Planification();
        $form = $this->container->get('form.factory')->create(new PlanificationType(), $plan);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $modele = $em->getRepository('AdminBundle:Projet')->find($id);
                $plan->setIdprojet($modele);
                $em->persist($plan);
                $em->flush();
                return $this->redirect($this->generateUrl("admin_grapheSuivie",array('id'=>$id)));
            }
        }
         
        return $this->render('AdminBundle:Technique:addPlanification.html.twig' , array('form' => $form->createView(),"id"=>$id));
    }
    
    public function addMADAction($id)
    {   

         $mad = new MAD();
        $form = $this->container->get('form.factory')->create(new MADType(), $mad);

        $Request = $this->getRequest();


        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $modele = $em->getRepository('AdminBundle:Projet')->find($id);
                $mad->setIdprojet($modele);
                $em->persist($mad);
                $em->flush();
                return $this->redirect($this->generateUrl("admin_grapheSuivie",array('id'=>$id)));
            }
        }
         
        return $this->render('AdminBundle:Technique:addMAD.html.twig' , array('form' => $form->createView(),"id"=>$id));
    }
     
     public function updateToleAction($id)
    {
         $em = $this->container->get('doctrine')->getEntityManager();
        $entity = $em->getRepository('AdminBundle:Tole')->find($id);
         $form = $this->container->get('form.factory')->create(new ToleType(), $entity);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($entity);
                $em->flush();
               return $this->redirect($this->generateUrl("tech_listerTole", array('id'=> $entity->getIdprojet()->getId())));
   
            }
        }


         return $this->render('AdminBundle:Technique:updTole.html.twig', array('form' => $form->createView(),'id'=> $id));
       
    }

     public function updateProjetAction($id)
    {
         $em = $this->container->get('doctrine')->getEntityManager();
        $entity = $em->getRepository('AdminBundle:Projet')->find($id);
         $form = $this->container->get('form.factory')->create(new ProjetType(), $entity);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($entity);
                $em->flush();
               return $this->redirect($this->generateUrl("tech_listProjet"));
   
            }
        }


         return $this->render('AdminBundle:Technique:updProjet.html.twig', array('form' => $form->createView(),'id'=> $id));
       
    }
    
     public function updateClientAction($id)
    {
         $em = $this->container->get('doctrine')->getEntityManager();
        $entity = $em->getRepository('AdminBundle:Client')->find($id);
         $form = $this->container->get('form.factory')->create(new ClientType(), $entity);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {
                 $src = $Request->files->get('photo');

                $stream = fopen($src, 'rb');
                
                $entity->setImage(stream_get_contents($stream));
                $em->persist($entity);
                $em->flush();
               return $this->redirect($this->generateUrl("tech_listClient"));
   
            }
        }


         return $this->render('AdminBundle:Technique:updClient.html.twig', array('form' => $form->createView(),'id'=> $id));
       
    }
    
    public function findToleAction($id){

        $em = $this->container->get('doctrine')->getEntityManager();
        $modele = $em->getRepository('AdminBundle:Tole')->find($id);
        $response = new JsonResponse();
        if($modele)
        {
        $prefa=$modele->getTempsprefa();
        $monta=$modele->getTempsMonta(); 
        $quantite = $modele->getQuantite();
        }
        else
        {
            $prefa = null;
            $monta=null;
            $quantite=null;
        }
        return $response->setData(array('prefa'=>$prefa,'monta'=>$monta,'quantite'=>$quantite));
        //echo ''.$modele->getPreavis();
     }
     
}

