<?php

namespace App\Model\Entity;

abstract class AbstractEntity
{
    /**
     * L'id
     * @var 
     */
    private ?int $id = null;

    /**
     * Retourne l'id
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Modifie l'id de l'espèce
     * @param int $id
     * @return Espece
     */
    public function setId(int $id): self
    {
        if ($this->id !== null) {
            throw new \LogicException("L'id est en lecture seule");
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Hydrate un objet
     * @param array $data un tableau Espece
     * @throws \InvalidArgumentException
     * @return AbstractEntity
     */
    public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $method  = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                throw new \InvalidArgumentException('La propriété ' . $key . ' nexiste pas');
            }
        }
        return $this;
    }
}
