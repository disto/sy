<?php

// src/Acme/TaskBundle/Controller/DefaultController.php
namespace kd1\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use kd1\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction($name='pietje')
    {
        return $this->render('kd1TaskBundle:Default:index.html.twig', array('name' => $name));
    }


    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();


        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
			->add('saveAndAdd', 'submit')
            ->getForm();
    
    	$form->handleRequest($request);

    	if ($form->isValid()) {
			$nextAction = $form->get('saveAndAdd')->isClicked()
     		   	? 'task_new'
				: 'task_success';
       		return $this->redirect($this->generateUrl($nextAction));
    	
		}
		
        return $this->render('kd1TaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}