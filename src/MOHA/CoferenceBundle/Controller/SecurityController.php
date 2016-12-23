<?php

namespace MOHA\CoferenceBundle\Controller;
use MOHA\CoferenceBundle\Entity\User;
use MOHA\CoferenceBundle\Form\LoginForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        $authentificationUtils = $this->get('security.authentication_utils');

        $lastUser = $authentificationUtils->getLastUsername();
        $error = $authentificationUtils->getLastAuthenticationError();

        $form = $this->createForm(LoginForm::class,['_username'=>$lastUser])->createView();
        return $this->render("MOHACoferenceBundle::login.html.twig",['error'=>$error,'form'=>$form]);
    }

    /**
     * @Route("/logout",name="security_logout")
     */

    public function logoutAction(){
        throw new Exception('this should not be reached');
    }
    /**
     * @Route("/test")
     */
  public function testAction(){
        $em =$this->getDoctrine()->getManager();
        $user = new User();
        $user->setEmail("etudiant@gmail.com");
        $user->setPlainPassword("etudiant");
        $user->setRoles(["ROLE_ETUDIANT"]);
        $em->persist($user);
        $em->flush();
       return  $this->redirectToRoute("homePage");
    }
}
