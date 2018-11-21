<?php
// src/MF/CVBundle/Form/ContactType.php

namespace MF\CVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', null, array('label' => 'Nom'))
        	->add('prenom', null, array('label' => 'Prénom'))
        	->add('email', null, array('label' => '@'))
        	->add('url', null, array('label' => 'URL'))
        	->add('objet', null, array('label' => 'Objet'))
        	->add('message', 'textarea', array('label' => 'Message','attr' => array('cols' => '5', 'rows' => '5')))
            ->add('captcha', 'captcha',array('label' => 'Merci de renseigner ce champ'))
        	->add('envoyer','submit', array('attr' => array('class' => 'btn btn-default pull-right flat')));
    }

    public function getName()
    {
        return 'contact';
    }
}

