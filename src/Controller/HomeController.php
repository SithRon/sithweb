<?php 

namespace App\Controller;

use App\Entity\ImgContact;
use App\Repository\ImagesRepository;
use App\Repository\ProfilRepository;
use App\Repository\FormationsRepository;
use App\Repository\ImgContactRepository;
use App\Repository\CompetencesRepository;
use App\Repository\ExperiencesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class HomeController extends AbstractController {


        /**
         * @Route("/", name="homepage")
         */
    public function home(ProfilRepository $repo, CompetencesRepository $repoComp, ExperiencesRepository $repoExp, FormationsRepository $repoForm, ImagesRepository $repoImg,
    ImgContactRepository $repoImgContact){
       
        $profil = $repo->findAll();
        $competences = $repoComp->findAll();
        $exp = $repoExp->findAll();
        $form= $repoForm->findAll();
        $img = $repoImg->findAll();
        $imgContact = $repoImgContact->findAll();

        return $this->render('home.html.twig', [
            'profil' => $profil,
            'competences'=>$competences,
            'exp' => $exp,
            'form' => $form,
            'img' => $img,
            'imgContact' => $imgContact,
        ]);
    }

    public function onProfiler(?Profiler $profiler){
        if (null !== $profiler) {
            // if it exists, disable the profiler for this particular controller action
            $profiler->disable();
        }
    }
}