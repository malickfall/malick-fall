<?php

namespace MF\CVBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MF\CVBundle\Entity\Job;
use Symfony\Component\HttpFoundation\Request;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jobs = $em->getRepository('MFCVBundle:Job')->getActiveJobs();

        return $this->render('MFCVBundle:Job:experiences.html.twig',array(
            'title'=>'expériences | Malick Fall',
            'experiences' => $jobs
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MFCVBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        return $this->render('MFCVBundle:Job:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
