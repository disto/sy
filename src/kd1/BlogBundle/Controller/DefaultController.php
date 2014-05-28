<?php
namespace kd1\BlogBundle\Controller;
use Symfony\Component\HttpFoundation\Request;	
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Movie;

class DefaultController extends Controller
{
	public $em;
	public $repository;
	
	public function showMoviesAction()
    {
    	$this->repository 	= $this->getDoctrine()->getRepository('kd1BlogBundle:Movies');
		$movies 			= $this->repository->findAll();	
        return $this->render('kd1BlogBundle:Default:index.html.twig', array('movies' => $movies));
    }
	
	public function detailsMovieAction(Request $request)
    {

    	$this->repository 	= $this->getDoctrine()->getRepository('kd1BlogBundle:Movies');
		$movie 				= $this->repository->findOneBy(array('id' => $request->get('key')));	
        return $this->render('kd1BlogBundle:Default:detailsMovie.html.twig', array('movie' => $movie));
    }
}
