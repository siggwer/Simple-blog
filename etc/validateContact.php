<?php

// Validate the contact form information
function validate($value, $constraint = [])
{
   foreach ($constraint as $key => $ct) {
       switch($key) {
           case 'length' === $key :
               $violations[$key] = (strlen($value) < $ct['min'] || strlen($value) > $ct['max']) ? sprintf('La valeur %s ne correspond pas aux longueurs requises', $value) : '';
               break;
               case 'email' === $key;
                $violations[$key] = checkdnsrr($value) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $value);
                break;
           default :
               $violations = [];
               break;

       }
   }

   return $violations;
}

