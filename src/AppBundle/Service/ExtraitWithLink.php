<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Service;

/**
 * Description of ExtraitWithLink
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class ExtraitWithLink {
    
    private $max, $router;
    
    public function __construct(\Symfony\Bundle\FrameworkBundle\Routing\Router $router, $max) {
        $this->router = $router;
        $this->max = $max;
    }

    public function get(\AppBundle\Entity\Article $article) {
        
        $texte = strip_tags($article->getContenu());
        
        if(strlen($texte) >= $this->max) {
            
            $texte = substr($texte, 0, $this->max);
            $texte = substr($texte, 0, strrpos($texte, " "));
            
            $url = $this->router->generate('detail_blog', ['id' => $article->getId()]);
            
            $texte .= ' <a href="' . $url . '">Lire la suite</a>';
        }
        
        return $texte;
    }
    
}
