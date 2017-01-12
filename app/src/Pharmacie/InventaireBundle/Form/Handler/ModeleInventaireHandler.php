<?php

namespace Pharmacie\InventaireBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
class  ModeleInventaireHandler{
	protected $form;
	protected $request;
	//protected $em;
	
	public function __construct(Form $form, Request $req){
		$this->form = $form;
		$this->request = $req;

	}

    public function process($em){
		$this->form->handleRequest($this->request);
		if($this->request->isMethod('post') && $this->form->isValid()){
		    $this->onSucces($em);
			return true;
		}
		return false;
	}

	private function onSucces($em){
        $manager = $em->getManager();
        $manager->persist($this->getForm()->getData());
        $manager->flush();
    }



	public function getForm(){
		return $this->form;
	}
}