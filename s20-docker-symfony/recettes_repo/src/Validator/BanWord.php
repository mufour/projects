<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final class BanWord extends Constraint
{
        public function __construct(
       public string $message = 'Le(s) mot(s) "{{value}}" ne sont pas autorisé(s)',
       public array $banWords = ['spam', 'viagra', 'libéralisme'])
       {
        
       }
}