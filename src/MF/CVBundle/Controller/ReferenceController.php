<?php

namespace MF\CVBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MF\CVBundle\Entity\Reference;
use MF\CVBundle\Entity\Category;

/**
 * Reference controller.
 *
 */
class ReferenceController extends Controller
{

    /**
     * Lists all Reference entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $references = $em->getRepository('MFCVBundle:Reference')->findAll();

        return $this->render('MFCVBundle:Reference:index.html.twig',array(
            'title'=>'références | Malick Fall',
            'references' => $references
        ));
    }

    /**
     * Finds and displays a Reference entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MFCVBundle:Reference')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reference entity.');
        }

        return $this->render('MFCVBundle:Reference:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
