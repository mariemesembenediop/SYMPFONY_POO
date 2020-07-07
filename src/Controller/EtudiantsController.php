<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Form\EtudianttuType;
use App\Repository\EtudiantRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantsController extends AbstractController
{ 
  /**
    * @Route("/supprimer", name="supprimer")
    */
    public function supprimer(EtudiantRepository $EtudiantRepository){
        $EtudiantRepository->supprimerEtudiant($_POST['id']);

    }
    /**
    * @Route("/listeEtudiants", name="listeEtudiantsAfficher")
    */

    public function listeEtudiantsAfficher(EtudiantRepository $etudiantRepository)
    {
       //dd($_POST);
        $etudiants=$etudiantRepository->findBy(array(),array(),$_POST["limit"],$_POST['offset']);
        for($i=0;$i<count($etudiants);$i++){
            $data[$i]['nom']=$etudiants[$i]->getNom();
            $data[$i]['prenom']=$etudiants[$i]->getPrenom();
            $data[$i]['email']=$etudiants[$i]->getEmail();
            $data[$i]['telephone']=$etudiants[$i]->getTelephone();
            $data[$i]['adresse']=$etudiants[$i]->getAdresse();
            $data[$i]['matricule']=$etudiants[$i]->getMatricule();
            $data[$i]['id']=$etudiants[$i]->getId();

        }
        return new JsonResponse($data);
    }
     /**
     * @Route("/Etudiant/liste", name="liste")
     */
public function listerEtudiant(){
    return $this->render('etudiants/liste.html.twig', [
        
    ]);
}
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(){
    return $this->render('base.html.twig', [
        
    ]);
}
    /**
     * @Route("/etudiants", name="etudiants")
     */
    public function index()
    {
        return $this->render('etudiants/index.html.twig', [
            'controller_name' => 'EtudiantsController',
        ]);
    }
     /**
     * @Route("/etudiants/create", name="etudiants_create")
     */
    public function create()
    {
        $etudiant= new Etudiant();
       // $form=$this->createForm(EtudianttuType::class,$etudiant);

       if(!empty($_POST)){
        $etudiant->setNom($_POST['nom']);
        $etudiant->setPrenom($_POST['prenom']);
         $etudiant->setMatricule($_POST['matricule']);
        $etudiant->setEmail($_POST['email']);
         $etudiant->setTelephone($_POST['telephone']);
        $etudiant->setDate(\DateTime::createFromFormat('Y-m-d',$_POST['datedenaissance']));

         $etudiant->setAdresse($_POST['adresse']);
         $em = $this->getDoctrine()->getManager();
         $em->persist($etudiant);
         $em->flush();
       }
    //  dd($_POST);
        return $this->render('etudiants/index.html.twig', [
          //  'form' => $form->createView(),
        ]);
    }
}
