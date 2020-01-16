<?php

namespace App\Controller\Admin;

use AlterPHP\EasyAdminExtensionBundle\Controller\EasyAdminController;
use App\Entity\User;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends EasyAdminController
{
    private $userManager;

    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @Route("/home", name="easyadmin_home")
     */
    public function homeAction()
    {
        return $this->render('bundles/EasyAdminBundle/default/home.html.twig');
    }

    /**
     * @return RedirectResponse
     */
    public function loginAsAction()
    {
        $id = $this->request->query->get('id');
        $user = $this->em->getRepository(User::class)->find($id);

        $params = [];
        if (!empty($user)) {
            $params['_switch_user'] = $user->getUsername();
        }

        return $this->redirectToRoute('home', $params);
    }

    public function createNewUserEntity()
    {
        return $this->userManager->createUser();
    }

    public function persistUserEntity($user)
    {
        $this->userManager->updateUser($user);
        parent::persistEntity($user);
    }

    public function updateUserEntity($user)
    {
        $this->userManager->updateUser($user);
        parent::updateEntity($user);
    }
}
