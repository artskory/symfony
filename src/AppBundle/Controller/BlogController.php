<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Commentaire;
use AppBundle\Form\ArticleType;
use AppBundle\Form\CommentaireType;
use AppBundle\Service\Extrait;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * @Route("/blog")
 */

class BlogController extends Controller
{
    /**
     * @Route("/{p}", name="blog", 
     * defaults={"p": 1}, 
     * requirements={"p": "\d+"})
     */
    public function indexAction(Request $request, $p, Extrait $extrait) {
        //var_dump($request);
        
        $em = $this->getDoctrine()->getManager();
        
        $ar = $em->getRepository('AppBundle:Article');
        
        $articles = $ar->getArticlesWithLeftJoin();
        
        foreach ($articles as $article){
            $article->setExtrait($extrait->get($article->getContenu()));
        }
        
        return $this->render('blog/index.html.twig', ['page'=> $p, 'articles'=>$articles]);
    }
    
    public function footerAction(Request $request, $nb) {
        
        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
        
        $articles = $em->getFooterArticles($nb);
        
       
        $year=date('Y');
        $archives=[$year,$year-1,$year-2];
        
        return $this->render('blog/footer.html.twig', [
            'articles'=>$articles,
            'archives'=>$archives
                ]);
    }
    
    public function yearsArchivesAction() {
        
        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
        
        $years = $em->getYears();
        
        return $this->render('blog/years_archives.html.twig', ['years'=>$years]);
    }
    
    /**
     * 
     * @Route("/archives/{year}", name="archives_blog",
     * requirements={"year": "\d+"})
     * 
     */
    public function ArchivesAction($year) {
        $ar = $this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
        
        $articles = $ar->getArticlesByYear($year);
        
        return $this->render('blog/archives.html.twig', ['year' => $year, 'articles' => $articles]);
    }
    
    /**
     * 
     * @Route("/detail/{id}", name="detail_blog",
     * requirements={"id": "\d+"})
     */
    public function detailAction(Request $request, $id) { //<=\AppBundle\Entity\Article $article
        
        $em = $this->getDoctrine()->getManager();
        
        $ar = $em->getRepository('AppBundle:Article');
        
        $article = $ar->getArticleByIdWithLeftJoin($id);
        
        // Formulaire Note
        
        $commentaire = new Commentaire();
        $commentaire->setArticle($article);
        
        $form = $this->createForm(CommentaireType::class, $commentaire, 
                ['action'=> $this->generateUrl('ajouter_commentaire_blog',
                        ['id'=>$id])
                    ]);
        
        
        return $this->render('blog/detail.html.twig', [
            'article'=>$article,
            'form' => $form->createView()]);
    }
    
    /**
     * @Method({"POST"})
     * @Route("/ajouter_commentaire_blog/{id}", name="ajouter_commentaire_blog", requirements={"id": "\d+"})
     */
    public function ajouterCommentaireAction(Request $request, Article $article) {
        
        $commentaire = new Commentaire();
        $commentaire->setArticle($article);
        
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
         
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            
            $session = $this->get('session');

            try{

                $em->flush();

                $session->getFlashBag()->add('succes', 'Commentaire enregistrer');

                return $this->redirectToRoute('detail_blog', ['id' => $article->getId()]);

            } catch (\Exception $e) {

                $session->getFlashBag()->add('erreur', 'Probleme lors de l\'enregistrement' . $e->getMessage());
                
                return $this->redirectToRoute('detail_blog', ['id' => $article->getId()]);

            }
        }
        
    }
    
    /**
     * @Route("/ajax_commentaire_blog", name="ajax_commentaire_blog")
     */
    public function ajouterAjaxCommentaireAction(Request $request) {
        
        if ($request->isXmlHttpRequest()) {
            
            $id = $request->request->get('id');
            
            $contenu = $request->request->get('contenu');
            
            $em = $this->getDoctrine()->getManager();
            
            $ar = $em->getRepository('AppBundle:Article');
            
            $article = $ar->find($id);
            
            $commentaire = new Commentaire();
            $commentaire->setArticle($article);
            $commentaire->setContenu($contenu);
            
            $em->persist($commentaire);
            
            try{

                $em->flush();

                return new JsonResponse([
                    'succes'=> TRUE,
                    'commentaire'=> [
                        'id' =>$commentaire->getId(),
                        'contenu' => $commentaire->getContenu(),
                        'date' => $commentaire->getDate()->format('Y-m-d')
                        ]
                    ]);

            } catch (\Exception $e) {

                return new JsonResponse(['succes'=>FALSE]);

            }
            
        }else {
            throw new HttpException(403);
        }
        
    }
    
    /**
     * @Route("/ajouter", name="ajouter")
     */
    public function ajouterAction(Request $request) {
        $article = new Article();
        
        $form = $this->createForm(ArticleType::class, $article);
        
        // traitement
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
         
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            
            $session = $this->get('session');

            try{

                $em->flush();

                $session->getFlashBag()->add('succes', 'Article enregistrer');

                return $this->redirectToRoute('detail_blog', ['id' => $article->getId()]);

            } catch (\Exception $e) {

                $session->getFlashBag()->add('erreur', 'Probleme lors de l\'enregistrement' . $e->getMessage());

            }
        }
        
        return $this->render('blog/ajouter.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/tag/{id}", name="tag_blog",
     *  requirements={"id": "\d+"})
     */
    public function tagAction($id) {
        
        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
        
        $tag = $em->getArticlesByTagWithLeftJoin($id);
        
        $nbtag = $em->getCountArticlesByTagWithLeftJoin($id);
        
        //var_dump($tag);
        return $this->render('blog/tag.html.twig', ['tag'=> $tag, 'nbtag' => $nbtag]);
    }
    
    /**
     * @Route("/modifier/{id}", name="modifier_blog", 
     * requirements={"id": "\d+"})
     */
    public function modifierAction(Request $request, $id) {
        
       // $article = new Article();
        
           $em = $this->getDoctrine()->getManager();
       $article = $em->getRepository('AppBundle:Article')->find($id);
        
      
        $form = $this->createForm(ArticleType::class, $article);
        // traitement
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
         
         
          
            
            $session = $this->get('session');

            try{

                $em->flush();

                $session->getFlashBag()->add('succes', 'Article modifier');

                return $this->redirectToRoute('detail_blog', ['id' => $article->getId()]);

            } catch (\Exception $e) {

                $session->getFlashBag()->add('erreur', 'Probleme lors de l\'enregistrement' . $e->getMessage());

            }
        }
        
        return $this->render('blog/modifier.html.twig', [
            'article'=> $id,
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/supprimer/{id}", name="supprimer_blog",
     * requirements={"id": "\d+"})
     */
    public function supprimerAction(Request $request, $id) {
        
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository('AppBundle:Article')->find($id);
        
        $em->remove($article);
        // $em->flush();
        
        $session = $this->get('session');
        
        try {
            $em->flush();
            
            $session->getFlashBag()->add('succes', 'Article supprimé');
            
            return $this->redirectToRoute('homepage_blog');
            
        } catch (Exception $e) {
            $session->getFlashBag()->add('erreur', 'Probleme de suppression' . $e->getMessage());
        
            return $this->redirectToRoute('detail_blog', ['id' => $article->getId()]);
        }
        
    }
    
    
    
}
