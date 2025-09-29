<?php

namespace App\Model\Entity;

/**
 * Représente la table espèce
 */
class Animal extends AbstractEntity
{
    /**
     * Summary of espece
     * @var 
     */
    private ?string $nom = null;

    /**
     * Summary of espece_id
     * @var 
     */
    private ?int $espece_id = null;

    public function getEspece_id(): ?int
    {
        return $this->espece_id;
    }

    public function setEspece_id(?int $espece_id = null): self
    {
        $this->espece_id = $espece_id;
        return $this;
    }

    /**
     * Retourne le nom de l'animal
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Modifie de nom de l'animal
     * @param mixed $espece
     * @return Animal
     */
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
}
