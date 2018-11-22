<?php

namespace MF\CVBundle\Controller;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    try {	
		    $experiences = $em->getRepository('MFCVBundle:Job')->getActiveJobs();
		    $competences = $em->getRepository('MFCVBundle:Competence')->getOrderedCompetences();
	    } catch (\Exception $e) {
		    var_dump($e->getMessage());die('ici');
	    }

        return $this->render('MFCVBundle:Default:index.html.twig',array(
            'title'=>'Ingénieur Développeur | Malick Fall',
            'experiences' => $experiences,
            'competences' => $competences
        ));
    }

    public function referencesAction()
    {
        return $this->render('MFCVBundle:Default:references.html.twig',array(
            'title'=>'références | Malick Fall'
        ));
    }

    public function competencesAction()
    {
        return $this->render('MFCVBundle:Default:competences.html.twig',array(
            'title'=>'compétences | Malick Fall'
        ));
    }

    public function loisirsAction()
    {
        return $this->render('MFCVBundle:Default:loisirs.html.twig',array(
            'title'=>'loisirs | Malick Fall'
        ));
    }

    public function downloadAction()
    {
        $cv = $this->get('mf.cvmanager');
        $em = $this->getDoctrine()->getManager();
 
        try {
            $me = $cv->getPersonnalData();

            $experiences = $em->getRepository('MFCVBundle:Job')->getActiveJobs();
            $competences = $em->getRepository('MFCVBundle:Competence')->getOrderedCompetences();
        } catch (\Exception $e) {
            var_dump($e->getMessage());die;
        }

        
        /*$html = $this->renderView('MFCVBundle:Default:cvpdf.html.twig', array(
            'me' => $me,
            'experiences' => $experiences,
            'competences' => $competences,
        ));

        $pdf = $this->get('knp_snappy.pdf')->getOutputFromHtml($html);
		*/

        /*return new Response($pdf, 200, array(
            'Content-Type'          => 'application/pdf',
            'Content-Disposition'   => 'attachment; filename="malickfall-cv.pdf"'
        ));*/

		
        return $this->render('MFCVBundle:Default:cvpdf.html.twig', array(
            'me' => $me,
            'experiences' => $experiences,
            'competences' => $competences,
        ));

		//return new PdfResponse($pdf, 'file.pdf');
    }
}

