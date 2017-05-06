<?php

namespace PizzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use PizzaBundle\Form\Type\ContactType;

use PizzaBundle\Entity\Order;


class DefaultController extends Controller
{
    /**
     * @Route(
     *      "/",
     *      name="pizza_home" 
     *)
     * 
     * @Template
     */
    public function indexAction()
    {
        $RepoContact = $this->getDoctrine()->getRepository('PizzaBundle:Contact');
        
        $rows = $RepoContact->findAll();
        
        return array(
            'rows' => $rows
        );
    }
    
    /**
     * @Route(
     *      "/menu",
     *      name = "pizza_menu"
     * )
     * 
     * @Template
     */
    public function menuAction() {
        
        $Repo = $this->getDoctrine()->getRepository('PizzaBundle:Menu');
        $RepoSause = $this->getDoctrine()->getRepository('PizzaBundle:Sause');
        $RepoAppetizer = $this->getDoctrine()->getRepository('PizzaBundle:Appetizer');
        $RepoDrink = $this->getDoctrine()->getRepository('PizzaBundle:Drink');
        $RepoContact = $this->getDoctrine()->getRepository('PizzaBundle:Contact');
        
        
        
        
        $row = $Repo->findAll();
        $rows = $RepoContact->findAll();
        $rowsSause = $RepoSause->findAll();
        $rowsAppetizer = $RepoAppetizer->findAll();
        $rowsDrink = $RepoDrink->findAll();
        
        
        return array(
            'row' => $row,
            'rowsSause' => $rowsSause,
            'rowsAppetizer' => $rowsAppetizer,
            'rowsDrink' => $rowsDrink,
            'rows' => $rows
        );
    }
    
    /**
     * @Route(
     *      "/promotion",
     *      name = "pizza_promotion"
     * )
     * 
     * @Template
     */
    public function promotionAction() {
        
        $RepoPromotion = $this->getDoctrine()->getRepository('PizzaBundle:Product');
        $RepoContact = $this->getDoctrine()->getRepository('PizzaBundle:Contact');
        
        $rowsPromotion = $RepoPromotion->findAll();
        $rows = $RepoContact->findAll();
        
        return array(
            'rowsPromotion' => $rowsPromotion,
            'rows' => $rows
        );
    }
    
    /**
     * @Route(
     *      "/contact",
     *      name = "pizza_contact"
     * )
     * 
     * @Template
     */
    public function contactAction(Request $Request) {
        
        $Order = new Order();
        
        $RepoContact = $this->getDoctrine()->getRepository('PizzaBundle:Contact');
        
        $row = $RepoContact->findAll();
        
        $form = $this->createForm(ContactType::class, $Order);
        
        $form->handleRequest($Request);
        
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Order);
            $em->flush();
            
            return $this->redirectToRoute('pizza_contact');
        }
        
        return array(
            'form' => $form->createView(),
            'rows' => $row
        );
    }
    
    public function baseAction() {
        $RepoContact = $this->getDoctrine()->getRepository('PizzaBundle:Contact');
        
        $rows = $RepoContact->findAll();
        
        return $this->render('PizzaBundle::base.html.twig',
            array('rows' => $rows));        
    }
    
}
