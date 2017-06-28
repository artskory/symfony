<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Twig;

/**
 * Description of Extrait
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class ExtraitTwig extends \Twig_Extension {
    
    private $max;
    
    private $suite;
    
    public function __construct($max, $suite) {
        $this->max = $max;
        $this->suite = $suite;
    }

    public function get($texte) {
        $texte = strip_tags($texte);
        
        if(strlen($texte) >= $this->max) {
            $texte = substr($texte, 0, $this->max);
            $texte = substr($texte, 0, strrpos($texte, " ")) . $this->suite;
        }
        
        return $texte;
    }
    
    public function getFunctions() {
        
        return array(new \Twig_SimpleFunction('extrait', // 'extrait' <= le nom q'on lui donne
                array($this, 'get'))); // 'get' <= le nom de notre methode
    }
    
     public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('extrait', array($this, 'get')),
        );
    }
}
