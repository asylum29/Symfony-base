<?php

namespace App\Controller\Admin;

use AlterPHP\EasyAdminExtensionBundle\Controller\EasyAdminController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends EasyAdminController
{
    /**
     * @Route("/home", name="easyadmin_home")
     */
    public function homeAction()
    {
        return $this->render('bundles/EasyAdminBundle/default/home.html.twig');
    }
}
