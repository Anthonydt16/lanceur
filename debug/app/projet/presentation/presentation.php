<?php
namespace Controller\Projet;
use Kernel\Security\Vulnerability\Xss;
use Kernel\Security\Vulnerability\Csrf;
use Kernel\Security\Validation;
use Kernel\Io\Render;



/**
 * Controleur du composant Presentation.
 * 
 * @author chris
 * @version 1.0
 * @package Controller\Projet
 * @category Component controller
 */
class Presentation extends Render {

    /**
     * Point d'entrée du controleur.
     * @param string $id
     * @param string $svg
     * @param string $title
     * @param string $color
     * @access public
     * @return void
     */
    function __construct($id, $svg, $title, $color) {
        $this->view([
            "id" => $id,
            "svg" => $svg,
            "title" => $title,
            "color" => $color
        ]);
    }

}

?>