<?php

namespace App\Model\Entity;

/**
 * Représente la table espèce
 */
class Espece extends AbstractEntity
{
    /**
     * Le nom de l'espèce
     * @var string|null
     */
    private ?string $espece = null;

    /**
     * Retourne le nom de l'epèce
     * @return string|null
     */
    public function getEspece(): ?string
    {
        return $this->espece;
    }

    /**
     * Modifie de nom de l'espèce
     * @param mixed $espece
     * @return self
     */
    public function setEspece(?string $espece): self
    {
        $this->espece = $espece;
        return $this;
    }
}
