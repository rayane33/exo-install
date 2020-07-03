<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
// je créé une class HomeController, qui me correspond
//au nom du fichier, et qui me permet de regrouper des routes
class HomeController{
    /**
     * @route("/", name="home")
     */
    public function honme()
    {
       var_dump("Bienvenue sur la page Accueil.");die;
    }
    /**
     * @route("/article", name="article")
     */
    public function article()
    {
        var_dump("Bienvenue sur la page Article.");die;
    }
    /**
     * @route("/contact", name="contact")
     */
    public function contact()
    {
        var_dump("Bienvenue sur la page Contact.");die;
    }
}