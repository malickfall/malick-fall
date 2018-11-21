<?php

namespace MF\CVBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MF\CVBundle\Entity\Job;
use MF\CVBundle\Entity\Reference;

class LoadReferenceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
		$this->loadJobs($manager);
		$this->loadReferences($manager);
    }

    public function loadJobs(ObjectManager $manager)
    {
    	$job = new Job();
		$job->setCompany('Inter Trade Network');
		$job->setType('CDI');
		$job->setUrl('http://www.itnetwork.fr');
		$job->setPosition('Chef de projet - Analyste-développeur web');
		$job->setLocation('Paris');
		$job->setDescription('Gestion et développement de projets WEB. Lead développeur Drupal et développeur symfony2');
		$job->setToken(uniqid("",true));
		$job->setIsActivated(true);
		$job->setBegunAt(new \DateTime("2011-12-05 09:00:00"));
		$job->setEndedAt(new \DateTime(""));
		$manager->persist($job);
		$this->addReference('itn', $job);

		$job4 = new Job();
		$job4->setCompany('Inter Trade Network');
		$job4->setType('Stage');
		$job4->setUrl('http://www.itnetwork.fr');
		$job4->setPosition('Stagiaire Analyste-développeur web, Licence informatique');
		$job4->setLocation('Paris');
		$job4->setDescription('Développeur d’applications, intégration et développement de projets divers avec et sans CMS');
		$job4->setToken(uniqid("",true));
		$job4->setIsActivated(true);
		$job4->setBegunAt(new \DateTime("2011-04-05 09:00:00"));
		$job4->setEndedAt(new \DateTime("2011-11-30 09:00:00"));
		$manager->persist($job4);
		$this->addReference('itnstage', $job4);

		$job1 = new Job();
		$job1->setCompany('Horson+Blake');
		$job1->setUrl('http://www.guustavmark.com/');
		$job1->setType('Stage');
		$job1->setPosition('Stagiaire Analyste-développeur web, Licence informatique');
		$job1->setLocation('Pontoise');
		$job1->setDescription('Chargé de développement WEB.');
		$job1->setToken(uniqid("",true));
		$job1->setIsActivated(true);
		$job1->setBegunAt(new \DateTime("2010-04-01 09:00:00"));
		$job1->setEndedAt(new \DateTime("2010-06-30 09:00:00"));
		$manager->persist($job1);
		$this->addReference('hb', $job1);

    	$job2 = new Job();
		$job2->setCompany('Objis Consulting');
		$job2->setType('Stage');
		$job2->setUrl('http://www.objis.com/');
		$job2->setPosition('Stagiaire Analyste-développeur web, 1ère année de BTS IG');
		$job2->setLocation('Lyon');
		$job2->setDescription('Développeur-Intégrateur sur de petit projet web.');
		$job2->setToken(uniqid("",true));
		$job2->setIsActivated(true);
		$job2->setBegunAt(new \DateTime("2008-05-01 09:00:00"));
		$job2->setEndedAt(new \DateTime("2008-06-30 09:00:00"));
		$manager->persist($job2);
		$this->addReference('objis1', $job2);

		$job3 = new Job();
		$job3->setCompany('Objis Consulting');
		$job3->setType('Stage');
		$job3->setUrl('http://www.objis.com/');
		$job3->setPosition('Stagiaire Analyste-développeur web, 2ème année de BTS IG');
		$job3->setLocation('Lyon');
		$job3->setDescription('Développeur-Intégrateur sur de petit projet web.');
		$job3->setToken(uniqid("",true));
		$job3->setIsActivated(true);
		$job3->setBegunAt(new \DateTime("2009-01-01 09:00:00"));
		$job3->setEndedAt(new \DateTime("2009-03-31 09:00:00"));
		$manager->persist($job3);
		$this->addReference('objis2', $job3);

    	$manager->flush();
    }

    public function loadReferences(ObjectManager $manager)
    {
    	$reference = new Reference();
		$reference->setNom('Site d\'Exane Asset Management');
		$reference->setUrl('https://www.exane-am.com');
		$reference->setJob($this->getReference('itn'));
		$reference->setDescription('Architecture, développement et maintenance du site sous Drupal 7. En ligne depuis 2012');
		$manager->persist($reference);

		$reference1 = new Reference();
		$reference1->setNom('Site de la Fédération Unie des Auberges de Jeunesse');
		$reference1->setUrl('http://www.hifrance.org');
		$reference1->setJob($this->getReference('itn'));
		$reference1->setDescription('Architecture, développement et maintenance du site sous Drupal 7. En ligne depuis 2011');
		$manager->persist($reference1);

		$reference2 = new Reference();
		$reference2->setNom('Site de l\'Institut Français');
		$reference2->setUrl('http://www.institutfrancais.com');
		$reference2->setJob($this->getReference('itn'));
		$reference2->setDescription('Architecture, développement et maintenance du site sous Drupal 7. Reprise du site fin 2012');
		$manager->persist($reference2);

		$reference3 = new Reference();
		$reference3->setNom('Site Clinicprosport');
		$reference3->setUrl('http://www.clinicprosport.fr');
		$reference3->setJob($this->getReference('itn'));
		$reference3->setDescription('Architecture, développement et maintenance du site sous Wordpress. En ligne depuis 2012');
		$manager->persist($reference3);
	
		$manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}