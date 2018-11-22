<?php

namespace MF\CVBundle\Manager;

class CVManager
{
    private $param;

    public function getPersonnalData()
    {
        $me = new \stdClass();
	    $me->nom = 'Fall';
	    $me->prenom = 'Malick';
	    $me->position = 'Ingénieur Développeur';
	    $me->age = '33 ans';
	    $me->email = 'malick.b.fall@gmail.com';
	    $me->tel = '06.64.69.83.75';
	    $me->site = 'http://www.malick-fall.com';

	    return $me;
    }
}

