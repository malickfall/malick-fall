<?php

namespace MF\CVBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MF\CVBundle\Entity\Competence;

/**
 * Competence controller.
 *
 */
class CompetenceController extends Controller
{

    /**
     * Lists all Competence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $competences = $em->getRepository('MFCVBundle:Competence')->getOrderedCompetences();

        return $this->render('MFCVBundle:Competence:competences.html.twig', array(
            'title'=>'compétences | Malick Fall',
            'competences' => $competences
        ));
    }

    /**
     * Finds and displays a Competence entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MFCVBundle:Competence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competence entity.');
        }

        return $this->render('MFCVBundle:Competence:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
