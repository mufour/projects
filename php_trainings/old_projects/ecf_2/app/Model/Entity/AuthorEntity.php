<?php

namespace App\Model\Entity;

/**
 * Représenter la class AuthorEntity
 */
class AuthorEntity extends AbstractEntity
{
    /**
     * Déterminer un auteur
     * @var
     */
    private ?string $author = null;

    /**
     * Déterminer un nom de fichier d'image
     * @var
     */
    private ?string $image = null;

    /**
     * Déterminer une biographie
     * @var
     */
    private ?string $biography = null;

    /**
     * Retourner un auteur
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * Modifier un auteur
     * @param mixed $author
     * @return AuthorEntity
     */
    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Retourner une image
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Modifier une image
     * @param mixed $image
     * @return AuthorEntity
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Retourner une biographie
     * @return string|null
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }

    /**
     * Mofidier une biographie
     * @param mixed $biography
     * @return AuthorEntity
     */
    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;
        return $this;
    }
}
