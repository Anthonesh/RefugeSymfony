<?php

namespace App\DataFixtures;
use App\Entity\Reservations;
use App\Entity\Jours;
use App\Entity\Heures;
use App\Entity\Utilisateurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {



        $adminUser = $this->createUtilisateurs("admin@refuge.com",["ROLE_ADMIN"], "123456789", "Rusch",  "Juelin", "0745321695",  $manager);

        $joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        
        foreach ($joursSemaine as $jour) {
            $jours = new Jours();
            $jours->setJourSemaine($jour);
            $manager->persist($jours);
        }
        
        $manager->flush();
        
        $heuresDebut = ['06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00'];
        $heuresFin = ['08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00'];
        
        foreach ($heuresDebut as $key => $heureDebut) {
            $heureFin = $heuresFin[$key];
        
            $plageHoraire = new Heures();
            $plageHoraire->setHeureDebut(new \DateTime($heureDebut));
            $plageHoraire->setHeureFin(new \DateTime($heureFin));
            $manager->persist($plageHoraire);
        }
        
        // Créez ici des réservations fictives, par exemple :
        $plageHoraire = $manager->getRepository(Heures::class)->findOneBy(['heureDebut' => new \DateTime('08:00')]);
        
        $reservation = new Reservations();
        $reservation->setHeure($plageHoraire);
        // Définissez d'autres propriétés de réservation si nécessaire
        $manager->persist($reservation);
        
        $manager->flush();
    }

    public function createUtilisateurs($Email, $arrRoles, $Password, $Nom, $Prenom, $Telephone,  ObjectManager $manager): Utilisateurs
    {
        $user = new Utilisateurs();
        $user->setEmail($Email);
        $user->setRoles($arrRoles);
        $user->setPassword(password_hash($Password, PASSWORD_BCRYPT));
        $user->setNomUtilisateur($Nom);
        $user->setPrenomUtilisateur($Prenom);
        $user->setNumeroTelephoneUtilisateur($Telephone);


        $manager->persist($user);

        $this->setReference('utilisateurs-' . $this->counter, $user);
        $this->counter++;
        
        return $user;
    }
}
        

