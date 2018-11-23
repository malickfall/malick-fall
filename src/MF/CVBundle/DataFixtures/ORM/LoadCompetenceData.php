<?php

namespace MF\CVBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MF\CVBundle\Entity\Category;
use MF\CVBundle\Entity\Competence;

class LoadCompetenceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
		$this->loadCategories($manager);
		$this->loadCompetences($manager);
    }

    public function loadCategories(ObjectManager $manager)
    {
    	$category = new Category();
		$category->setNom('Backend');
		$manager->persist($category);
		$this->addReference('back', $category);

    	$category3 = new Category();
		$category3->setNom('Frontend');
		$manager->persist($category3);
		$this->addReference('front', $category3);

		$category1 = new Category();
		$category1->setNom('Gestion de projet');
		$manager->persist($category1);
		$this->addReference('gest', $category1);

		$category2 = new Category();
		$category2->setNom('Logiciels');
    	$manager->persist($category2);
    	$this->addReference('soft', $category2);

		$category4 = new Category();
		$category4->setNom('Outils');
    	$manager->persist($category4);
    	$this->addReference('tools', $category4);

        $manager->flush();
    }

    public function loadCompetences(ObjectManager $manager)
    {
    	$competence = new Competence();
		$competence->setNom('PHP5');
		$competence->setNiveau(4);
		$competence->setCategory($this->getReference('back'));
		$manager->persist($competence);

		$competence1 = new Competence();
		$competence1->setNom('Drupal');
		$competence1->setNiveau(4);
		$competence1->setCategory($this->getReference('tools'));
		$manager->persist($competence1);

		$competence2 = new Competence();
		$competence2->setNom('Symfony');
		$competence2->setNiveau(4);
		$competence2->setCategory($this->getReference('back'));
		$manager->persist($competence2);

		$competence3 = new Competence();
		$competence3->setNom('GIT');
		$competence3->setNiveau(4);
		$competence3->setCategory($this->getReference('tools'));
		$manager->persist($competence3);

		$competence4 = new Competence();
		$competence4->setNom('Linux');
		$competence4->setNiveau(3);
		$competence4->setCategory($this->getReference('back'));
		$manager->persist($competence4);

		$competence5 = new Competence();
		$competence5->setNom('Javascript');
		$competence5->setNiveau(4);
		$competence5->setCategory($this->getReference('back'));
		$manager->persist($competence5);

		$competence6 = new Competence();
		$competence6->setNom('JQuery');
		$competence6->setNiveau(4);
		$competence6->setCategory($this->getReference('front'));
		$manager->persist($competence6);

		$competence7 = new Competence();
		$competence7->setNom('Ajax');
		$competence7->setNiveau(4);
		$competence7->setCategory($this->getReference('back'));
		$manager->persist($competence7);

		$competence8 = new Competence();
		$competence8->setNom('PHPUnit');
		$competence8->setNiveau(3);
		$competence8->setCategory($this->getReference('back'));
		$manager->persist($competence8);

		$competence9 = new Competence();
		$competence9->setNom('Composer');
		$competence9->setNiveau(3);
		$competence9->setCategory($this->getReference('tools'));
		$manager->persist($competence9);

		$competence10 = new Competence();
		$competence10->setNom('Wordpress');
		$competence10->setNiveau(4);
		$competence10->setCategory($this->getReference('tools'));
		$manager->persist($competence10);

		$competence11 = new Competence();
		$competence11->setNom('Templating : Twig, Smarty et PHP');
		$competence11->setNiveau(4);
		$competence11->setCategory($this->getReference('front'));
		$manager->persist($competence11);

		$competence12 = new Competence();
		$competence12->setNom('Elaboration de devis');
		$competence12->setCategory($this->getReference('gest'));
		$manager->persist($competence12);

		$competence13 = new Competence();
		$competence13->setNom('Méthode Merise');
		$competence13->setCategory($this->getReference('gest'));
		$manager->persist($competence13);

		$competence14 = new Competence();
		$competence14->setNom('UML');
		$competence14->setCategory($this->getReference('gest'));
		$manager->persist($competence14);

		$competence15 = new Competence();
		$competence15->setNom('Revue de code');
		$competence15->setCategory($this->getReference('gest'));
		$manager->persist($competence15);

		$competence16 = new Competence();
		$competence16->setNom('Redmine : bug reporting / gestion de projet');
		$competence16->setCategory($this->getReference('gest'));
		$manager->persist($competence16);

		$competence17 = new Competence();
		$competence17->setNom('Référencement naturel, optimisation SEO');
		$competence17->setCategory($this->getReference('gest'));
		$manager->persist($competence17);

		$competence18 = new Competence();
		$competence18->setNom('Logiciels de développement (VIM, sublimetext2, PHPStorm, notepad++, ...)');
		$competence18->setCategory($this->getReference('soft'));
		$manager->persist($competence18);

		$competence19 = new Competence();
		$competence19->setNom('Navigateurs web (Firefox, Chrome, Opera, Safari, Internet explorer)');
		$competence19->setCategory($this->getReference('soft'));
		$manager->persist($competence19);

		$competence20 = new Competence();
		$competence20->setNom('Logiciels de bureautique (Word, Excel, Powerpoint, ....) + maitrise des macros');
		$competence20->setCategory($this->getReference('soft'));
		$manager->persist($competence20);

		$competence21 = new Competence();
		$competence21->setNom('clients FTP/SSH (Filezilla, Putty, ...)');
		$competence21->setCategory($this->getReference('soft'));
		$manager->persist($competence21);

		$competence22 = new Competence();
		$competence22->setNom('API Mailchimp');
		$competence22->setNiveau(4);
		$competence22->setCategory($this->getReference('back'));
		$manager->persist($competence22);

		$competence23 = new Competence();
		$competence23->setNom('NodeJS');
		$competence23->setNiveau(4);
		$competence23->setCategory($this->getReference('back'));
		$manager->persist($competence23);

		$competence24 = new Competence();
		$competence24->setNom('ElasticSearch');
		$competence24->setNiveau(4);
		$competence24->setCategory($this->getReference('back'));
		$manager->persist($competence24);

		$competence25 = new Competence();
		$competence25->setNom('RabbitMQ');
		$competence25->setNiveau(4);
		$competence25->setCategory($this->getReference('back'));
		$manager->persist($competence25);

		$competence26 = new Competence();
		$competence26->setNom('Angular');
		$competence26->setNiveau(4);
		$competence26->setCategory($this->getReference('front'));
		$manager->persist($competence26);

		$competence27 = new Competence();
		$competence27->setNom('VueJS');
		$competence27->setNiveau(4);
		$competence27->setCategory($this->getReference('front'));
		$manager->persist($competence27);

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
