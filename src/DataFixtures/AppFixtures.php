<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use App\Entity\Competences;
use App\Entity\Experiences;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $profil = new Profil();
        $competences = new Competences();

        $profil ->setTitre("HAMDOULA")
                ->setContenu("Blablablablablablbal du contenu ici blablabla");
        $competences ->setBackend('PHP 7.*, Symfony 5, Twig, C#, Java, JEE')
                    ->setFrontend('HTML , CSS, Javascript/Ajax, JQuery, Angular')
                    ->setOutils('Git')
                    ->setSgbd('Orale, SQL Server, MySQL, PostgreSQL');
        
     /*    $exp ->setTitre('GFI Informatique / Meudon-la-Forêt / Consultant ECM / CDI ')
            ->setDate('Septembre 2018 - Mars 2020')
            ->setMission('
            Client Thales :
            <ul>
                <li>Développement front pour la plateforme GED (HTML / CSS)</li>
                <li> Réalisation de dossier de test unitaire, automatisation des tests (KATALON)</li>
            </ul>
            <strong>Client SFR : </strong>
            <ul>
                <li>Mise en place et installation d’outil GED sur un environnement LINUX</li> 
                <li>Développement de scripts SHELL, scripts SQL</li>
                <li>Suivi des livraisons dans les environnements</li>
                <li>Suivi de production et gestion des incidents</li>
            </ul>
            Client Omexom :
            <ul>
                <li>Réalisation d’IHM de tableaux de bord (HTML / CSS)</li>
                <li>Développement de tableau de bord spécifique sur un logiciel de GED (JavaScript/Ajax, JQuery)</li>
            </ul>
                   Gestionnaire de VM sur Microsoft Azure <br>
                   Rédaction de documentation technique et guide d’utilisateurs 
            '); */

        $manager->persist($profil);
        $manager->persist($competences);
/*         $manager->persist($exp); */
        $manager->flush();
    }
}
