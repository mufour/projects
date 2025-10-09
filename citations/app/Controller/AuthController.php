<?php

namespace App\Controller;

/**
 * Gestion de l'authentification
 */
class AuthController extends AbstractController
{
    public function login()
    {
        // Si le formulaire est soumis
        if (isset($_POST['mail'], $_POST['password'])) {
            if (empty($_POST['mail']) || empty($_POST['password'])) {
                $this->addFlash('Veuillez remplir tous les champs', AbstractController::DANGER);
                return $this->redirect('/login');
            }
            // On vérifie que le mail soit au bon format
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $this->addFlash('Le format de l\'adresse mail n\'est pas respeté', AbstractController::DANGER);
                return $this->redirect('/login');
            }
            // On compare le mot de passe avec celui de la base de données
            $userRepo = new \App\Model\Repository\UserRepository(\App\Database\PDOSingleton::getInstance());
            $hashed = (string)$userRepo->getHashedPassword($_POST['mail']);
            if(password_verify($_POST['password'], $hashed)) {
            // On met en place la session et on redirige vers la page d'accueil
                    $user = $userRepo->getUsetByMail($_POST['mail']);
                    $_SESSION['user'] = [
                        'id'=> $user['id'],
                        'mail' => $user['mail'],
                        'is_admin' =>(bool)$user['is_admin']
                    ];
                    $this->redirect('/');
            } else {
                // On redigige vers la page d'accueil
                $this->addFlash('Identfiants invalides', AbstractController::DANGER);
                $this->redirect('/login');
            }
        }

        // Affichage du formulaire
        $this->render('auth/login');
    }

    public function logout()
    {
        // On détruit la session
        unset($_SESSION['user']);
        $this->addFlash('Vous vous êtes déconnectés avec une réussite inégalable !', AbstractController::SUCCESS);

        // On redirige vers la page de connexion
        $this->redirect('/login');
    }
}
