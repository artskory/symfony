<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Note;
use AppBundle\Form\NoteType;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * @Route("/catalogue", name="homepage_catalogue")
 */

class CatalogueController extends Controller {
    
    /**
     * @Route("/", name="catalogue")
     */
    public function indexAction(Request $request) {
        
        $cm = $this->getDoctrine()->getManager()->getRepository('AppBundle:Categorie');
        
        $categories = $cm->findBy([],['titre'=>'ASC']);
        
        return $this->render('catalogue/index.html.twig', ['categories'=>$categories]);
    }
    
    /**
     * 
     * @Route("/categorie/{id}", name="categorie_catalogue",
     * requirements={"id": "\d+"})
     */
    public function categorieAction(Request $request, Categorie $cat) { 
        
        $pm = $this->getDoctrine()->getManager()->getRepository('AppBundle:Produit');
        
        $produits = $pm->getProduitsByCategorieWithLeftJoin($cat);
        
        return $this->render('catalogue/categorie.html.twig', ['produits'=>$produits]);
    }
    
    /**
     * 
     * @Route("/detail/{id}", name="detail_catalogue",
     * requirements={"id": "\d+"})
     */
    public function detailAction(Request $request, $id) {
        
        $em = $this->getDoctrine()->getManager();
        
        $pr = $em->getRepository('AppBundle:Produit');
        
        $produit = $pr->getProduitByIdWithLeftJoin($id);
        
        // Formulaire Note
        
        $note = new Note();
        $note->setProduit($produit);
        
        $form = $this->createForm(NoteType::class, $note);
        
        // traitement
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
         
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            
            $session = $this->get('session');

            try{

                $em->flush();

                $session->getFlashBag()->add('succes', 'Note enregistrer');

                return $this->redirectToRoute('detail_catalogue', ['id' => $produit->getId()]);

            } catch (Exception $e) {

                $session->getFlashBag()->add('erreur', 'Probleme lors de l\'enregistrement' . $e->getMessage());

            }
        }
        
        return $this->render('catalogue/detail.html.twig', [
            'produit'=>$produit,
            'note'=>$note,
            'form' => $form->createView()]);
    }
    
    /**
     * @Route("/ajax_note_produit", name="ajax_note_produit")
     */
    public function ajouterAjaxNoteAction(Request $request) {
        
        if ($request->isXmlHttpRequest()) {
            
            $id = $request->request->get('id');
            
            $valeur = $request->request->get('value');
            
            $em = $this->getDoctrine()->getManager();
            
            $pr = $em->getRepository('AppBundle:Produit');
            
            $produit = $pr->find($id);
            
            $note = new Note();
            $note->setProduit($produit);
            $note->setValue($valeur);
            
            $em->persist($note);
            
            try{

                $em->flush();

                return new JsonResponse([
                    'success'=> TRUE,
                    'note'=> [
                        'id' =>$note->getId(),
                        'value' => $note->getValue()
                        ]
                    ]);

            } catch (\Exception $e) {

                return new JsonResponse(['succes'=>FALSE]); //, 'message'=>$e->getMessage()

            }
            
        }else {
            throw new HttpException(403);
        }
        
    }
    
    /**
     * @Route("/ajax_new_prod", name="ajax_new_prod")
     */
    public function ajaxNewProd(Request $request) {
        
         if ($request->isXmlHttpRequest()) {
             
        $em = $this->getDoctrine()->getManager();
        
        $pr = $em->getRepository('AppBundle:Produit');
        
        $produits = $pr->getTroisDernierProduits();
        
        return $this->render('catalogue/new.html.twig', ['produits'=>$produits]);
        
        }
    }
}
