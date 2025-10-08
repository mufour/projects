<?php

class Hydratation{

/**
 * Summary of hydrate
 * @param array $data
 * @return Hydratation
 */
public function hydrate(array $data): self
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists(__CLASS__, $method)) {
                $this->$method($value);
            } else {
                echo 'La méthode ' . $method . ' nexiste pas.';
            }
        }
        return $this;
    }
}