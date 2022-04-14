<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    /**
     * @Route("/affichearticles", name="getarticles")
     */
    public function afficheArticle(ArticleRepository $repository){
        $articles= $repository->findByExampleField("desarchive");
        return $this->render("article/afficheArticle.html.twig",
            array('articles'=>$articles));
    }
    /**
     * @Route("/removeArticle/{id}",name="deleteArticle")
     */
    public function deleteArticle($id)

    {
        $em=$this->getDoctrine()->getManager();
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);
        $article->setEtat("supprimer");
        $em->flush();

        return $this->redirectToRoute("getarticles");
    }
    /**
     * @Route("/addArticle",name="addArticle")
     */
    public function addArticle( Request $request)
    {

        $article= new article();
        $form= $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $article->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('article_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $article->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $article->setEtat("desarchive");
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("getarticles");
        }
        return $this->render("article/formAddarticle.html.twig",array("articleform"=>$form->createView()));
    }

    /**
     * @Route("/updateArticle/{id}", name="updateArticle")
     */
    public function updateArticle( Request $request,ArticleRepository $repository,$id)
    {
        $article= $repository->find($id);
        $form= $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $article->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('article_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $article->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("getarticles");
        }
        return $this->render("article/updateArticle.html.twig",array("article"=>$article,"articleformi"=>$form->createView()));
    }

    /**
     * @Route("/admin/article/{id}", name="articledetailadmin")
     */
    public function ArticleAdmin(ArticleRepository $articleRepository,CommentaireRepository $commentaireRepository,$id){
        $article= $articleRepository->find($id);
        $commentaires=$commentaireRepository->findByArticle($article);
        return $this->render("article/articleAdmin.html.twig",
            array('article'=>$article,'commentaires'=>$commentaires));
    }

    /**
     * @Route("/article/{id}", name="articledetail")
     */
    public function Article(ArticleRepository $articleRepository,CommentaireRepository $commentaireRepository,$id,Request $request){
        $article= $articleRepository->find($id);
        $commentaires=$commentaireRepository->findByArticle($article);

        $commentaire=new Commentaire();
        $form= $this->createForm(CommentaireType::class,$commentaire);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $commentaire->setIdArticle($article);
            $commentaire->setAuteurC($article->getAuteur());
            $commentaire->setDatepub(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute("articledetail",array('id'=>$id));
        }
        return $this->render("article/article.html.twig",
            array('article'=>$article,'commentaires'=>$commentaires,'form'=>$form->createView()));
    }

    /**
     * @Route("/articles", name="articles")
     */
    public function Articles(ArticleRepository $repository){
        $articles= $repository->findByExampleField("desarchive");
        return $this->render("article/affichearticlesfront.html.twig",
            array('articles'=>$articles));
    }

}

