<?php

namespace EMSI\SmartPhoneBundle\Controller;

use EMSI\SmartPhoneBundle\Entity\commande;
use EMSI\SmartPhoneBundle\Entity\role;
use EMSI\SmartPhoneBundle\Entity\Smartphone;
use EMSI\SmartPhoneBundle\Entity\utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction(){
        return array('index');
    }
    /**
     * @Route("/login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        if($request->getMethod()=='POST'){
            $login=$request->get('login');
            $mtp=$request->get('mtp');
            $em=$this->getDoctrine()->getManager();
            $repository = $em->getRepository("EMSISmartPhoneBundle:utilisateur");
            $user=$repository->findOneBy(array('login'=>$login,'mtp'=>$mtp));
            $phones=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:Smartphone")->findAll();
            if($user-> getUser()=="admin"){

                return $this->render("EMSISmartPhoneBundle:Default:admin.html.twig",  array('phones' => $phones));
            }elseif($user-> getUser()=="registered"){
                    return $this->render("EMSISmartPhoneBundle:Default:registered.html.twig", array('phones' => $phones));
            }else
            {
                echo $login;
                return $this->render("EMSISmartPhoneBundle:Default:login.html.twig", array('name'=>'login failed'));
            }
        }
    }

    /**
     * @Route("/admin")
     * @Template()
     */
    public function adminAction()
    {

        $phones=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:Smartphone")->findAll();
        return array('phones' => $phones);
    }
    /**
     * @Route("/registered")
     * @Template()
     */
    public function registeredAction()
    {
        $phones=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:Smartphone")->findAll();
        return array('phones' => $phones);
    }

    /**
     * @Route("/addPhone")
     * @Template()
     */
    public function addPhoneAction(Request $request)
    {
        $phone= new Smartphone();
        $form=$this->createFormBuilder($phone)
            ->add('Marque','text')
            ->add('Modele','text')
            ->add('Couleur','text')
            ->add('Taille','text')
            ->add('Prix','text')
            ->add('Ajouter','submit')
            ->add('Annuler','reset')
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($phone);
            $em->flush();
        }
        return array('f' => $form->createView());
    }

    /**
     * @Route("/addRole/{role}")
     * @Template()
     */
    public function addRoleAction($role)
    {
        $role = new role();
        $role->setIntitule($role);
        $em=$this->getDoctrine()->getManager();
        $em->persist($role);
        $em->flush();
        return array('role' => $role);
    }

    /**
     * @Route("/addUser")
     * @Template()
     */
    public function addUserAction(Request $request)
    {
        $user= new utilisateur();
        $formuser=$this->createFormBuilder($user)
            ->add('Login','text')
            ->add('Mtp','password')
            ->add('user','text')
            ->add('Role','entity',array(
                "class"=>"EMSI\SmartPhoneBundle\Entity\Role",
                "property"=>"intitule"
            ))
            ->add('Ajouter','submit')
            ->add('Annuler','reset')
            ->getForm();
        $formuser->handleRequest($request);
        if($formuser->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return array('fuser' => $formuser->createView());
    }

    /**
     * @Route("/addCommande")
     * @Template()
     */
    public function addCommandeAction(Request $request)
    {
        $cmd= new commande();
        $formcmd=$this->createFormBuilder($cmd)

            ->add('Smartphone','entity',array(
                "class"=>"EMSI\SmartPhoneBundle\Entity\Smartphone",
                "property"=>"marque"
            ))
            ->add('Quantite','text')
            ->add('Prixtotal','text')

            ->add('user','entity',array(
                "class"=>"EMSI\SmartPhoneBundle\Entity\utilisateur",
                "property"=>"user"
            ))

            ->add('Ajouter','submit')
            ->add('Annuler','reset')

            ->getForm();
        $formcmd->handleRequest($request);
        if($formcmd->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($cmd);
            $em->flush();
        }
        return array('fcmd' => $formcmd->createView());
    }
    //""""""""""""""""""""""""""""Modifier""""""""""""""""""""""""""""""//




    //""""""""""""""""""""""""""""Listes""""""""""""""""""""""""""""""//

    /**
     * @Route("/listPhones")
     * @Template()
     */
    public function listPhonesAction()
    {
        $phones=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:Smartphone")->findAll();
        return array('phones' => $phones);
    }

    /**
     * @Route("/listRole")
     * @Template()
     */
    public function listRoleAction()
    {
        $role=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:role")->findAll();
        return array('role' => $role);
    }

    /**
     * @Route("/listUser")
     * @Template()
     */
    public function listUserAction()
    {
        $user=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:utilisateur")->findAll();
        return array('user' => $user);
    }

    /**
     * @Route("/listCommande")
     * @Template()
     */
    public function listCommandeAction()
    {
        $cmd=$this->getDoctrine()->getRepository("EMSISmartPhoneBundle:commande")->findAll();
        return array('cmd' => $cmd);
    }
}
