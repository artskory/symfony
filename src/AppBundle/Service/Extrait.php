<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Description of Extrait
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class Extrait {
    
    private $session;
    
    private $max;
    
    private $suite;
    
    public function __construct(Session $session, $max, $suite) {
        $this->session = $session;
        $this->max = $max;
        $this->suite = $suite;
    }

    public function get($texte) {
        $texte = strip_tags($texte);
        
        if(strlen($texte) >= $this->max) {
            $texte = substr($texte, 0, $this->max);
            $texte = substr($texte, 0, strrpos($texte, " ")) . $this->suite;
        }
        
        //$this->session->getFlashBag()->add('succes', 'Extrait Ok');
        
        return $texte;
    }
    
}
