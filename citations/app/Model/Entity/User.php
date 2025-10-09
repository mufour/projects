<?php

namespace App\Model\Entity;

/**
 * Entité représentant un utilisateur
 */

class User extends AbstractEntity
{

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';
    
    /**
     * Mail de l'utilisateur
     * @var string|null
     */
    private ?string $mail = null;
    
    /**
     * Mot de passe de l'utilisateur
     * @var 
     */
    private ?string $password = null;

    /**
     * Droit d'administration de l'utilisateur
     * @var 
     */
    private ?bool $isAdmin = false;

    /**
     * Token de l'utilisateur pur la réinitialisation du mot de passe
     * @var 
     */
    private ?string $token = null;

    /**
     * Retourne le mail de l'utilisateur
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * Modifie le mail de l'utilisateur
     * @param mixed $mail
     * @return void
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * Retourne le mot de passe de l'utilisateur
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Modifie de mot de passe de l'utilisateur
     * @param mixed $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Retourne le role de l'utilisateur
     * @return bool|null
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     * Modifie le role de l'utilisateur
     * @param bool $isAdmin
     * @return User
     */
    public function setIsAdmin(bool $isAdmin = false): self
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * Retourne le token de l'utilisateur
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Modifie le token de l'utilisateur
     * @param mixed $token
     * @return User
     */
    public function setToken(?string $token = null): self
    {
        $this->token = $token;
        return $this;
    }
}