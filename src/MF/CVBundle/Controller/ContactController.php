<?php

namespace MF\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MF\CVBundle\Entity\Contact;
use MF\CVBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{

    /**
     * Lists all Contact entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Contact();

        $form = $this->createForm(new ContactType(), $entity,array(
          'action' => $this->generateUrl('mf_cv_contact'),
          'method' => 'POST'
        ));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setSubmitedAt();
            $em->persist($entity);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('sender@yopmail.com')
                ->setTo('recipient@yopmail.com')
                //->setBody($this->renderView('HelloBundle:Hello:email.txt.twig', array('name' => $name)))
                ->setBody('email body')
            ;
            //var_dump($message);die;
            $this->get('mailer')->send($message);

            return $this->render('MFCVBundle:Contact:contact.html.twig', array(
              'title' => 'contact | Malick Fall',
              'form'   => $form->createView(),
              'submitted' => true,
              'entity' => $entity
            ));
        }

        return $this->render('MFCVBundle:Contact:contact.html.twig', array(
            'title'=>'contact | Malick Fall',
            'form'   => $form->createView()
        ));
    }

    /**
     * Finds and displays a Contact entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MFCVBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        return $this->render('MFCVBundle:Contact:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}

