<?php

namespace MOHA\CoferenceBundle\Controller;

use MOHA\CoferenceBundle\Entity\Auteur;
use MOHA\CoferenceBundle\MOHACoferenceBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/home",name="homePage")
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MOHACoferenceBundle:Default:base.html.twig');
    }


    /**
     * @Route("/auteur/ajouter")
     * @Security("is_granted(['ROLE_AUTEUR','ROLE_ADMIN','ROLE_PRESIDENT'])")
     */
    public function ajoutAction(Request $request){

        $auteur = new Auteur();
        $auteur->setNom($request->query->get("nom"));
        $auteur->setPrenom($request->query->get("prenom"));
        $auteur->setEmail($request->query->get("email"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($auteur);
        $em->flush();
        $this->redirectToRoute("auteurList");
    }
    /**
     * @Route("/auteur/list", name="auteurList")
     * @Security("is_granted(['ROLE_ADMIN','ROLE_ETUDIANT'])")
     */
    public function listAction(){
        $em = $this->getDoctrine()->getManager();
            $autreurs=$em->getRepository('MOHACoferenceBundle:Auteur')->findAll();
            return $this->render("MOHACoferenceBundle::auteur.html.twig",["auteurs"=>$autreurs]);
    }}
