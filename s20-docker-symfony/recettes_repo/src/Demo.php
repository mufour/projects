<?php

namespace App;

use Symfony\Component\Validator\Validator\ValidatorInterface;

class Demo
{
  public function __construct(private ValidatorInterface $validator, private string $key) {

  } 
}

# Exemple d'une class qu'on va appeler dans services.yaml, qui sera donc acceptée.