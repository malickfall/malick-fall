<?php

namespace MF\CVBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MF\CVBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('MFCVBundle:Category')->findAll();

        return $this->render('MFCVBundle:Category:index.html.twig', array(
            'entities' => $categories,
        ));
    }

    /**
     * Finds and displays a Category entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MFCVBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        return $this->render('MFCVBundle:Category:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
