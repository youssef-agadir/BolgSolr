<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\ArticleCompetence;

class BlogController extends Controller
{
  public function indexAction($page)
  {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if( $page < 1 )
    {
      // On déclenche une exception NotFoundHttpException
      // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }
    // On récupère le service
    $antispam = $this->container->get('sdz_blog.antispam');

    // Je pars du principe que $text contient le texte d'un message quelconque
    //if ($antispam->isSpam($text)) {
    //  throw new \Exception('Votre message a été détecté comme spam !');
    //}

    // Ici, on récupérera la liste des articles, puis on la passera au template

     // Les articles :
  $articles = array(
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Chiffre d\'affaire en hausse',
      'id'      => 3, 
      'auteur' => 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime())
  );

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('SdzBlogBundle:Blog:index.html.twig', array(
    'articles' => $articles
    ));
  }
  
  public function rechercheAction()
  {

   

// create a client instance
$client = $this->get('solarium.client');

// get a select query instance
$query = $client->createSelect();

// this executes the query and returns the result
$resultset = $client->select($query);

// display the total number of documents found by solr
echo 'NumFound: '.$resultset->getNumFound();

// show documents using the resultset iterator
foreach ($resultset as $document) {

    echo '<hr/><table>';

    // the documents are also iterable, to get all fields
    foreach($document AS $field => $value)
    {
        // this converts multivalue fields to a comma-separated string
        if(is_array($value)) $value = implode(', ', $value);
        
        echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
    }

    echo '</table>';
}


  }

   public function modifierAction($id)
  {

    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }

    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('SdzBlogBundle:Categorie')
                           ->findAll();

    // On boucle sur les catégories pour les lier à l'article
    foreach($liste_categories as $categorie)
    {
      $article->addCategorie($categorie);
    }

    // Inutile de persister l'article, on l'a récupéré avec Doctrine

    // Étape 2 : On déclenche l'enregistrement
    $em->flush();

    return new Response('OK');

    // Ici, on récupérera l'article correspondant à $id

    $article = array(
      'id'      => 1,
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()
    );

    // Ici, on s'occupera de la création et de la gestion du formulaire

    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
      'article' => $article
    ));
  }
  public function voirAction($id)
  {
    // Ici, on récupérera l'article correspondant à l'id $id
    $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('SdzBlogBundle:Article');


    $article = $repository->find($id);

    if($article==null)
    {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
    }
    $em = $this->getDoctrine()->getManager();
    $liste_commentaire = $em->getRepository('SdzBlogBundle:Commentaire')
                            ->findAll();

    return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
      'article' => $article,
      'liste_commentaire'=> $liste_commentaire
    ));
  }
  
  public function ajouterAction()
  {
    // Creation de l'entite
    $article = new Article();
    $article->setTitre('Mon dernier Weekend');
    $article->setAuteur('Bibi');
    $article->setContenu("C'était vraiment super et on s'est bien amusé.");

    // Création de l'entité Image
    $image = new Image();
    $image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
    $image->setAlt('Logo Symfony2');

    // On lie l'image à l'article
    $article->setImage($image);

    // Création d'un premier commentaire
    $commentaire1 = new Commentaire();
    $commentaire1->setAuteur('winzou');
    $commentaire1->setContenu('On veut les photos !');

    // Création d'un deuxième commentaire, par exemple
    $commentaire2 = new Commentaire();
    $commentaire2->setAuteur('Choupy');
    $commentaire2->setContenu('Les photos arrivent !');

    // On lie les commentaires à l'article
    $commentaire1->setArticle($article);
    $commentaire2->setArticle($article);

    //on recupere l'entityManager

    $em = $this->getDoctrine()->getManager();

    //etape 1 :on "persiste" l'entite
    $em->persist($article);

    $em->persist($commentaire1);
    $em->persist($commentaire2);
    //etape 2 : on "flush" tous ce qui a ete persite avant
    $em->flush();

    // Les compétences existent déjà, on les récupère depuis la bdd
    $liste_competences = $em->getRepository('SdzBlogBundle:Competence')
                            ->findAll(); // Pour l'exemple, notre Article contient toutes les Competences

    // Pour chaque compétence
    foreach($liste_competences as $i => $competence)
    {
      // On crée une nouvelle « relation entre 1 article et 1 compétence »
      $articleCompetence[$i] = new ArticleCompetence;

      // On la lie à l'article, qui est ici toujours le même
      $articleCompetence[$i]->setArticle($article);
      // On la lie à la compétence, qui change ici dans la boucle foreach
      $articleCompetence[$i]->setCompetence($competence);

      // Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
      $articleCompetence[$i]->setNiveau('Expert');

      // Et bien sûr, on persiste cette entité de relation, propriétaire des deux autres relations
      $em->persist($articleCompetence[$i]);
    }

    // On déclenche l'enregistrement
    $em->flush();

    // Reste de la methode qu'on avait deja ecrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
    }

    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
  }
  
 

  public function supprimerAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('SdzBlogBundle:Article')
                  ->find($id);

    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
    
    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('SdzBlogBundle:Categorie')
                           ->findAll();
    
    // On enlève toutes ces catégories de l'article
    foreach($liste_categories as $categorie)
    {
      // On fait appel à la méthode removeCategorie() dont on a parlé plus haut
      // Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
      $article->removeCategorie($categorie);
    }

    // On n'a pas modifié les catégories : inutile de les persister
    
    // On a modifié la relation Article - Categorie
    // Il faudrait persister l'entité propriétaire pour persister la relation
    // Or l'article a été récupéré depuis Doctrine, inutile de le persister
  
    // On déclenche la modification
    $em->flush();

    return new Response('OK');
  }
   public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
    
    return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
  public function modifierImageAction($id_article)
{
  $em = $this->getDoctrine()->getManager();

  // On récupère l'article
  $article = $em->getRepository('SdzBlogBundle:Article')->find($id_article);

  // On modifie l'URL de l'image par exemple
  $article->getImage()->setUrl('test.png');

  // On n'a pas besoin de persister notre article (si vous le faites, aucune erreur n'est déclenchée, Doctrine l'ignore)
  // Rappelez-vous, il l'est automatiquement car on l'a récupéré depuis Doctrine

  // Pas non plus besoin de persister l'image ici, car elle est également récupérée par Doctrine

  // On déclenche la modification
  $em->flush();

  return new Response('OK');
}

}

