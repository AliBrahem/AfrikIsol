<?php

namespace BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\AdminBundle\Form\UserType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Ob\HighchartsBundle\Highcharts\Highchart;

class UserController extends Controller
{
    public function indexAction()
    {
        
       $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
            
         $images = base64_encode(stream_get_contents($m->getImage()));
         
        return $this->render('AdminBundle:Default:index.html.twig'
                , array('img' => $images)
                );
    }
     public function showAction()
    {
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
         $images = base64_encode(stream_get_contents($m->getImage()));
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('AdminBundle:User:showProfile.html.twig', array(
            'user' => $user, array('img' => $images)
        ));
    }
    
    public function updateAction(Request $request) {
       
        $user = $this->getUser();
        $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
         $images = base64_encode(stream_get_contents($m->getImage()));
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('AdminBundle:User:updateProfile.html.twig', array(
            'form' => $form->createView() ,'img' => $images
        ));
    }
    
    public function listerAction() {
        //access user manager services 

        //$userManager = $this->get('fos_user.user_manager');
        //$users = $userManager->findUsers();
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
         $images = base64_encode(stream_get_contents($m->getImage()));
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM AdminBundle:User u WHERE u.roles NOT LIKE :role'
            )->setParameter('role', '%"ROLE_ADMIN"%');

        $users = $query->getResult();
        
        
        return $this->render('AdminBundle:User:list.html.twig', array('users' =>   $users,'img' => $images));
    }
    
    public function updateOtherAction($id)
    {
        $em = $this->getDoctrine()->getManager();
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
         $images = base64_encode(stream_get_contents($m->getImage()));
        
        $entity = $em->getRepository('AdminBundle:User')->find($id);
        
        
        
        $form = $this->createFormBuilder($entity)
                ->add('Username')
                ->add('Email')
                ->add('Roles', 'collection',
                    array('label' => false, 
                        'type' => 'choice', 
                        'options' => array( 'choices' 
                            => array('ROLE_TECHNIQUE' => 'Service Technique', 
                                'ROLE_COMMERCIAL' => 'Service Commercial', 
                                'ROLE_LOGISTIQUE' => 'Service Logistique', 
                                'ROLE_FINANCIER' => 'Service Financier',''=>''), 'empty_value' => 'Choisissez le poste',
                    'empty_data'  => null ) ))
           
                ->add('Locked', 'choice', array(
                'choices'   => array('0' => 'Activer', '1' => 'Désactiver'),
                'required'  => true))
                
                ->add('ExpiresAt', 'datetime')
                ->getForm();
        $form->setData($entity);
        $request = $this->getRequest();
        //verifie si le formulaire est submitter puis il récupère les données de la requête si la requête est porteuxe des données 
        if ($form->handleRequest($request)->isValid()) {
            $objToPersist = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($objToPersist);
            $em->flush();
            
           // $userManager = $this->get('fos_user.user_manager');
            // $users = $userManager->findUsers();
            $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM AdminBundle:User u WHERE u.roles NOT LIKE :role'
            )->setParameter('role', '%"ROLE_ADMIN"%');

            $users = $query->getResult();
        return $this->render('AdminBundle:User:list.html.twig', array('users' =>   $users,'img' => $images));
        }
        return $this->render('AdminBundle:User:updateOtherUser.html.twig',array(
            'form' => $form->createView(),'id'=> $id,'img' => $images
        ));
    }
    
    public function deleteAction($id) {

       $em = $this->getDoctrine()->getManager();
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
         $images = base64_encode(stream_get_contents($m->getImage()));
        
        $entity = $em->getRepository('AdminBundle:User')->find($id);
        $em->remove($entity);
        $em->flush();
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        
        return $this->render('AdminBundle:User:list.html.twig', array('users' =>   $users,'img' => $images));
    }
    
     
    
     public function chartLineAction($id){
        // Chart
         $usr= $this->get('security.context')->getToken()->getUser();
            $m=array();
            $m=$usr;
            $images = array();
   
         $images = base64_encode(stream_get_contents($m->getImage()));
        $em = $this->container->get('doctrine')->getEntityManager();
        $modele = $em->getRepository('AdminBundle:Projet')->find($id);
        $plan = $em->getRepository('AdminBundle:Planification')->findOneBy(array('idprojet' => $id));
        
        return $this->render('AdminBundle:User:LineChart.html.twig', array(
        'plan'=>$plan,'img'=>$images
        ));
        }
    
}