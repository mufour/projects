<?php

namespace App\Client;

use Exception;

class Compte
{
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }

    public function __toString(): string
    {
        return $this->getPrenom() . " " . $this->getNom();
    }

    public function getNom(): string
    {
        return $this->nom;
    } 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setNom(string $nom): self
    {
        if(strlen($nom) === 0) {
            throw new \InvalidArgumentException('Le nom ne peut pas être vide');
        }
        $this->nom = $nom;
        return $this;
    }
    /**
     * Modifier le prénom du client
     * @param string $prenom prénom client
     * @return Compte
     */
    public function setPrenom(string $prenom): self
    {
        if(strlen($prenom) === 0) {
            throw new \InvalidArgumentException('Le prénom ne peut pas être vide');
        }
        $this->prenom = $prenom;
        return $this;
    }
}
